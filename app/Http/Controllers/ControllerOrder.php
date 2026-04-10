<?php

namespace App\Http\Controllers;

use App\Mail\NewOrderAdmin;
use App\Mail\OrderConfirmation;
use App\Models\Design;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ControllerOrder extends Controller
{
    public function create(Request $request)
    {
        $design = null;
        if ($request->has('design_id')) {
            $design = Design::where('id', $request->design_id)
                ->where('user_id', Auth::id())
                ->first();
        }
        return view('orders.create', compact('design'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'design_id'        => [
                'nullable',
                'exists:saved_designs,id',
                function ($attr, $value, $fail) {
                    if ($value && !\App\Models\Design::where('id', $value)->where('user_id', \Illuminate\Support\Facades\Auth::id())->exists()) {
                        $fail('Invalid design.');
                    }
                },
            ],
            'room_width'       => 'required|numeric|min:0.1|max:1000',
            'room_height'      => 'required|numeric|min:0.1|max:1000',
            'customer_name'    => 'required|string|max:255',
            'customer_email'   => 'required|email|max:255',
            'customer_phone'   => 'nullable|string|max:30',
            'delivery_address' => 'required|string|max:1000',
            'notes'            => 'nullable|string|max:2000',
        ]);

        $validated['tile_quantity'] = Order::calcTiles(
            (float) $validated['room_width'],
            (float) $validated['room_height']
        );
        $validated['user_id'] = Auth::id();
        $validated['status']  = 'pending';

        $order = Order::create($validated);

        try {
            Mail::to($order->customer_email)->send(new OrderConfirmation($order));
            $adminEmail = config('mail.admin_address');
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new NewOrderAdmin($order));
            }
        } catch (\Exception $e) {
            Log::error('Order email failed: ' . $e->getMessage());
        }

        return redirect()->route('orders.show', $order)
            ->with('status', __('lang.order_success'));
    }

    public function index()
    {
        $orders = Auth::user()->orders()->with('design')->latest()->paginate(10);
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        abort_if($order->user_id !== Auth::id(), 403);
        $order->load('design');
        return view('orders.show', compact('order'));
    }

    public function cancel(Order $order)
    {
        abort_if($order->user_id !== Auth::id(), 403);
        abort_if($order->status !== 'pending', 403);

        $order->update(['status' => 'cancelled']);

        return back()->with('status', __('lang.order_cancelled'));
    }
}
