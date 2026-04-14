@extends('layouts.app')
@section('title', __('lang.my_orders') . ' — Mosaico')

@section('content')
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;">
    <div class="page-title" style="margin-bottom:0;">{{ __('lang.my_orders') }}</div>
    <a href="{{ route('orders.create') }}" class="btn-ms btn-ms-primary">{{ __('lang.new_order') }}</a>
</div>

@if($orders->isEmpty())
    <div class="card-panel">
        <div class="empty-state">
            <div class="empty-state-text">{{ __('lang.no_orders') }}</div>
            <a href="{{ route('home') }}" class="btn-ms btn-ms-primary" style="margin-top:20px;">{{ __('lang.start_and_order') }}</a>
        </div>
    </div>
@else
    <div class="card-panel" style="padding:0;overflow:hidden;">
        <table class="table-ms">
            <thead>
                <tr>
                    <th>#</th>
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
                    <td style="font-weight:500;">{{ $order->design?->name ?? '–' }}</td>
                    <td>{{ $order->room_width }} × {{ $order->room_height }} m²</td>
                    <td><strong>{{ $order->tile_quantity }}</strong> {{ __('lang.tiles_unit') }}</td>
                    <td style="font-weight:700;color:var(--terra);">€{{ number_format($order->totalPrice(), 2) }}</td>
                    <td style="color:var(--ink-mute);font-size:0.76rem;">{{ $order->created_at->format('d/m/Y') }}</td>
                    <td><span class="badge-status badge-{{ $order->status }}">{{ $order->statusLabel() }}</span></td>
                    <td><a href="{{ route('orders.show', $order) }}" class="btn-ms btn-ms-outline" style="font-size:0.68rem;padding:5px 12px;">{{ __('lang.view') }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin-top:20px;">{{ $orders->links() }}</div>
@endif
@endsection
