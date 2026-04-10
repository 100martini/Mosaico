<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDesign extends Controller
{
    public function index()
    {
        $designs = Auth::user()->designs()->latest()->paginate(12);
        return view('designs.index', compact('designs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'snapshot' => 'required',
        ]);

        $snapshot = is_array($request->snapshot)
            ? $request->snapshot
            : json_decode($request->snapshot, true);

        $design = Design::create([
            'user_id'  => Auth::id(),
            'name'     => $request->name,
            'snapshot' => $snapshot,
        ]);

        return response()->json([
            'id'       => $design->id,
            'name'     => $design->name,
            'saved_at' => $design->created_at->toDateTimeString(),
        ]);
    }

    public function show(Design $design)
    {
        abort_if($design->user_id !== Auth::id(), 403);
        return response()->json($design);
    }

    public function destroy(Design $design)
    {
        abort_if($design->user_id !== Auth::id(), 403);
        $design->delete();
        return back()->with('status', __('lang.design_deleted'));
    }

    public function loadIntoStudio(Design $design)
    {
        abort_if($design->user_id !== Auth::id(), 403);
        return redirect()->route('home', ['load' => $design->id]);
    }
}
