<?php

namespace App\Http\Controllers;

use App\Mail\OrderStatusChanged;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ControllerAdmin extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total'     => Order::count(),
            'pending'   => Order::where('status', 'pending')->count(),
            'confirmed' => Order::where('status', 'confirmed')->count(),
            'shipped'   => Order::where('status', 'shipped')->count(),
            'cancelled' => Order::where('status', 'cancelled')->count(),
            'revenue'   => round(Order::whereIn('status', ['confirmed', 'shipped'])->sum('tile_quantity') * Order::PRICE_PER_TILE, 2),
            'users'     => User::count(),
        ];

        $recent = Order::with(['user', 'design'])->latest()->take(6)->get();

        return view('admin.dashboard', compact('stats', 'recent'));
    }

    public function index(Request $request)
    {
        $query = Order::with(['user', 'design'])->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $orders  = $query->paginate(20)->withQueryString();
        $current = $request->status ?? 'all';

        return view('admin.orders', compact('orders', 'current'));
    }

    public function show(Order $order)
    {
        $order->load(['user', 'design']);
        return view('admin.order-detail', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,shipped,cancelled',
        ]);

        $oldStatus = $order->status;
        $order->update(['status' => $request->status]);

        if ($oldStatus !== $request->status) {
            try {
                Mail::to($order->customer_email)->send(new OrderStatusChanged($order));
            } catch (\Exception $e) {
            Log::error('Status email failed: ' . $e->getMessage());
        }
        }

        return back()->with('status', __('lang.status_updated'));
    }
}
