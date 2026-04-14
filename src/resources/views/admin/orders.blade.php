@extends('layouts.app')
@section('title', 'Admin — ' . __('lang.my_orders'))

@section('content')
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;">
    <div class="page-title" style="margin-bottom:0;">Admin — {{ __('lang.my_orders') }}</div>
    <div style="font-size:0.76rem;color:var(--ink-mute);font-weight:500;">{{ $orders->total() }} {{ __('lang.orders_count') }}</div>
</div>

<div style="display:flex;gap:8px;margin-bottom:22px;flex-wrap:wrap;background:var(--white);padding:6px;border-radius:var(--r-lg);border:1px solid var(--border);display:inline-flex;">
    @foreach(['all' => __('lang.all'), 'pending' => __('lang.status_pending'), 'confirmed' => __('lang.status_confirmed'), 'shipped' => __('lang.status_shipped'), 'cancelled' => __('lang.status_cancelled')] as $val => $label)
    <a href="{{ route('admin.orders', $val !== 'all' ? ['status' => $val] : []) }}"
       class="btn-ms {{ $current === $val ? 'btn-ms-primary' : 'btn-ms-outline' }}"
       style="font-size:0.7rem;padding:6px 14px;border-radius:var(--r);">{{ $label }}</a>
    @endforeach
</div>

<div class="card-panel" style="padding:0;overflow:hidden;">
    @if($orders->isEmpty())
        <div class="empty-state" style="padding:40px;">
            <div class="empty-state-text">{{ __('lang.no_orders') }}</div>
        </div>
    @else
    <table class="table-ms">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('lang.name') }}</th>
                <th>{{ __('lang.email') }}</th>
                <th>{{ __('lang.design') }}</th>
                <th>{{ __('lang.surface') }}</th>
                <th>{{ __('lang.quantity') }}</th>
                <th>{{ __('lang.total_price') }}</th>
                <th>{{ __('lang.date') }}</th>
                <th>{{ __('lang.status') }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td style="color:var(--ink-mute);font-size:0.76rem;font-weight:500;">#{{ $order->id }}</td>
                <td style="font-weight:600;">{{ $order->customer_name }}</td>
                <td style="color:var(--ink2);font-size:0.78rem;">{{ $order->customer_email }}</td>
                <td style="color:var(--ink2);">{{ $order->design?->name ?? '–' }}</td>
                <td>{{ $order->room_width }}×{{ $order->room_height }} m²</td>
                <td><strong>{{ $order->tile_quantity }}</strong></td>
                <td style="font-weight:700;color:var(--terra);">€{{ number_format($order->totalPrice(), 2) }}</td>
                <td style="color:var(--ink-mute);font-size:0.76rem;">{{ $order->created_at->format('d/m/Y') }}</td>
                <td><span class="badge-status badge-{{ $order->status }}">{{ $order->statusLabel() }}</span></td>
                <td><a href="{{ route('admin.orders.show', $order) }}" class="btn-ms btn-ms-outline" style="font-size:0.68rem;padding:5px 12px;">{{ __('lang.view') }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

<div style="margin-top:20px;">{{ $orders->links() }}</div>
@endsection
