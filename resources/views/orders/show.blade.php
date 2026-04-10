@extends('layouts.app')
@section('title', __('lang.order_detail') . ' #' . $order->id . ' — Mosaico')

@section('content')
<div style="display:flex;align-items:center;gap:16px;margin-bottom:28px;flex-wrap:wrap;">
    <a href="{{ route('orders.index') }}" style="color:var(--ink-mute);font-size:0.8rem;text-decoration:none;transition:color .15s;" onmouseover="this.style.color='var(--terra)'" onmouseout="this.style.color='var(--ink-mute)'">{{ __('lang.back_to_orders') }}</a>
    <div class="page-title" style="margin-bottom:0;">{{ __('lang.order_detail') }} #{{ $order->id }}</div>
    <span class="badge-status badge-{{ $order->status }}">{{ $order->statusLabel() }}</span>
</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

    <div class="card-panel">
        <div class="card-panel-title">{{ __('lang.order_details') }}</div>
        <table style="width:100%;font-size:0.84rem;border-collapse:collapse;">
            @php
            $rows = [
                [__('lang.design'), $order->design?->name ?? '–', true],
                [__('lang.surface'), $order->room_width . ' × ' . $order->room_height . ' m² = ' . round($order->room_width * $order->room_height, 2) . ' m²', true],
                [__('lang.quantity'), $order->tile_quantity . ' ' . __('lang.tiles_unit'), false, 'var(--terra)', '1rem'],
                [__('lang.total_price'), '€' . number_format($order->totalPrice(), 2), false, 'var(--terra)', '1.1rem'],
                [__('lang.date'), $order->created_at->format('d/m/Y'), false],
            ];
            @endphp
            @foreach($rows as $row)
            <tr>
                <td style="color:var(--ink-mute);padding:10px 0;width:45%;font-weight:500;">{{ $row[0] }}</td>
                <td style="font-weight:{{ $row[2] ?? false ? '500' : '700' }};{{ isset($row[3]) ? 'color:'.$row[3].';' : '' }}{{ isset($row[4]) ? 'font-size:'.$row[4].';' : '' }}padding:10px 0;">{{ $row[1] }}</td>
            </tr>
            @endforeach
            <tr>
                <td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.status') }}</td>
                <td style="padding:10px 0;"><span class="badge-status badge-{{ $order->status }}">{{ $order->statusLabel() }}</span></td>
            </tr>
        </table>
    </div>

    <div class="card-panel">
        <div class="card-panel-title">{{ __('lang.delivery') }}</div>
        <table style="width:100%;font-size:0.84rem;border-collapse:collapse;">
            <tr><td style="color:var(--ink-mute);padding:10px 0;width:45%;font-weight:500;">{{ __('lang.name') }}</td><td style="font-weight:600;padding:10px 0;">{{ $order->customer_name }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.email') }}</td><td style="padding:10px 0;">{{ $order->customer_email }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.phone') }}</td><td style="padding:10px 0;">{{ $order->customer_phone ?? '–' }}</td></tr>
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.address') }}</td><td style="white-space:pre-line;padding:10px 0;">{{ $order->delivery_address }}</td></tr>
            @if($order->notes)
            <tr><td style="color:var(--ink-mute);padding:10px 0;">{{ __('lang.notes') }}</td><td style="white-space:pre-line;color:var(--ink2);padding:10px 0;">{{ $order->notes }}</td></tr>
            @endif
        </table>
    </div>

</div>

@if($order->design)
<div class="card-panel" style="margin-top:4px;">
    <div class="card-panel-title">{{ __('lang.associated_design') }}</div>
    <div style="display:flex;align-items:center;gap:20px;">
        @if(!empty($order->design->snapshot['thumbnail']))
        <div style="width:90px;height:90px;border-radius:var(--r);overflow:hidden;border:1px solid var(--border);flex-shrink:0;">
            <img src="{{ $order->design->snapshot['thumbnail'] }}" style="width:100%;height:100%;object-fit:cover;" alt="{{ $order->design->name }}">
        </div>
        @else
        <div style="width:90px;height:90px;background:linear-gradient(135deg, var(--off2), var(--off));border-radius:var(--r);display:flex;align-items:center;justify-content:center;font-size:1.5rem;opacity:0.15;flex-shrink:0;">⬛</div>
        @endif
        <div>
            <div style="font-weight:600;font-size:0.92rem;">{{ $order->design->name }}</div>
            <div style="font-size:0.72rem;color:var(--ink-mute);margin-top:4px;">{{ __('lang.saved_on') }} {{ $order->design->created_at->format('d/m/Y') }}</div>
            <a href="{{ route('designs.load', $order->design) }}" class="btn-ms btn-ms-outline" style="margin-top:12px;font-size:0.7rem;padding:6px 14px;">{{ __('lang.open_in_studio') }}</a>
        </div>
    </div>
</div>
@endif

@if($order->status === 'pending')
<div style="margin-top:4px;">
    <form method="POST" action="{{ route('orders.cancel', $order) }}" onsubmit="return confirm('{{ __('lang.cancel_confirm') }}')">
        @csrf @method('PATCH')
        <button type="submit" class="btn-ms btn-ms-danger" style="padding:10px 22px;">
            {{ __('lang.cancel_order') }}
        </button>
    </form>
</div>
@endif
@endsection
