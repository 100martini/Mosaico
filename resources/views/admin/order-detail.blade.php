@extends('layouts.app')
@section('title', 'Admin — ' . __('lang.order_detail') . ' #' . $order->id)

@section('content')
<div style="display:flex;align-items:center;gap:16px;margin-bottom:28px;flex-wrap:wrap;">
    <a href="{{ route('admin.orders') }}" style="color:var(--ink-mute);font-size:0.8rem;text-decoration:none;transition:color .15s;" onmouseover="this.style.color='var(--terra)'" onmouseout="this.style.color='var(--ink-mute)'">← {{ __('lang.my_orders') }}</a>
    <div class="page-title" style="margin-bottom:0;">{{ __('lang.order_detail') }} #{{ $order->id }}</div>
    <span class="badge-status badge-{{ $order->status }}">{{ $order->statusLabel() }}</span>
</div>

@if(session('status'))
<div class="alert-ms alert-ms-success">{{ session('status') }}</div>
@endif

<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

    <div class="card-panel">
        <div class="card-panel-title">{{ __('lang.order_details') }}</div>
        <table style="width:100%;font-size:0.84rem;border-collapse:collapse;">
            <tr><td style="color:var(--ink-mute);padding:10px 0;width:40%;font-weight:500;">{{ __('lang.name') }}</td><td style="font-weight:600;padding:10px 0;">{{ $order->user->name }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.email') }}</td><td style="padding:10px 0;">{{ $order->customer_email }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.phone') }}</td><td style="padding:10px 0;">{{ $order->customer_phone ?? '–' }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.address') }}</td><td style="white-space:pre-line;padding:10px 0;">{{ $order->delivery_address }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.design') }}</td><td style="padding:10px 0;">{{ $order->design?->name ?? '–' }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.surface') }}</td><td style="padding:10px 0;">{{ $order->room_width }} × {{ $order->room_height }} m²</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.quantity') }}</td><td style="font-weight:700;color:var(--terra);font-size:0.95rem;padding:10px 0;">{{ $order->tile_quantity }} {{ __('lang.tiles_unit') }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.total_price') }}</td><td style="font-weight:700;font-family:var(--font-serif);font-size:1.15rem;color:var(--terra);padding:10px 0;">€{{ number_format($order->totalPrice(), 2) }}</td></tr>
            @if($order->notes)
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.notes') }}</td><td style="white-space:pre-line;padding:10px 0;">{{ $order->notes }}</td></tr>
            @endif
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.date') }}</td><td style="padding:10px 0;">{{ $order->created_at->format('d/m/Y H:i') }}</td></tr>
        </table>
    </div>

    <div>
        <div class="card-panel">
            <div class="card-panel-title">{{ __('lang.status') }}</div>
            <form method="POST" action="{{ route('admin.orders.status', $order) }}">
                @csrf @method('PATCH')
                <div style="margin-bottom:18px;">
                    <label class="form-label-sm">{{ __('lang.status') }}</label>
                    <select class="form-control-ms" name="status" style="cursor:pointer;">
                        <option value="pending"   {{ $order->status === 'pending'   ? 'selected' : '' }}>{{ __('lang.status_pending') }}</option>
                        <option value="confirmed" {{ $order->status === 'confirmed' ? 'selected' : '' }}>{{ __('lang.status_confirmed') }}</option>
                        <option value="shipped"   {{ $order->status === 'shipped'   ? 'selected' : '' }}>{{ __('lang.status_shipped') }}</option>
                        <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>{{ __('lang.status_cancelled') }}</option>
                    </select>
                </div>
                <button type="submit" class="btn-ms btn-ms-primary" style="width:100%;justify-content:center;">{{ __('lang.save') }}</button>
            </form>
        </div>

        @if($order->design && $order->design->snapshot)
        <div class="card-panel" style="margin-top:0;">
            <div class="card-panel-title">{{ __('lang.design') }} — Snapshot</div>
            <div style="font-size:0.8rem;color:var(--ink2);line-height:2;">
                @php $snap = $order->design->snapshot; @endphp
                <div style="display:flex;align-items:center;gap:8px;">
                    <span style="color:var(--ink-mute);font-weight:500;">{{ __('lang.centre') }}:</span>
                    <span style="font-weight:600;">ID {{ $snap['center']['id'] ?? '–' }}</span>
                </div>
                <div style="display:flex;align-items:center;gap:8px;">
                    <span style="color:var(--ink-mute);font-weight:500;">{{ __('lang.border') }}:</span>
                    <span style="font-weight:600;">ID {{ $snap['border']['id'] ?? '–' }}</span>
                </div>
                @if(!empty($snap['background']['color']))
                <div style="display:flex;align-items:center;gap:8px;">
                    <span style="color:var(--ink-mute);font-weight:500;">{{ __('lang.colour') }}:</span>
                    <span style="display:inline-block;width:18px;height:18px;border-radius:4px;border:1px solid var(--border);background:{{ $snap['background']['color'] }};vertical-align:middle;"></span>
                    <code style="font-size:0.75rem;color:var(--ink3);">{{ $snap['background']['color'] }}</code>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>

</div>
@endsection
