@extends('layouts.app')
@section('title', 'Admin — ' . __('lang.dashboard'))

@section('content')
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;">
    <div class="page-title" style="margin-bottom:0;">{{ __('lang.dashboard') }}</div>
    <a href="{{ route('admin.orders') }}" class="btn-ms btn-ms-outline">{{ __('lang.my_orders') }} →</a>
</div>

<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:24px;">
    @php
    $cards = [
        ['val' => $stats['total'], 'label' => __('lang.total_orders'), 'color' => 'var(--terra)', 'icon' => '📋'],
        ['val' => $stats['pending'], 'label' => __('lang.status_pending'), 'color' => '#D97706', 'icon' => '⏳'],
        ['val' => $stats['shipped'], 'label' => __('lang.status_shipped'), 'color' => '#059669', 'icon' => '✓'],
        ['val' => '€' . number_format($stats['revenue'], 2), 'label' => __('lang.total_revenue'), 'color' => 'var(--terra)', 'icon' => '💰'],
    ];
    @endphp
    @foreach($cards as $card)
    <div class="card-panel" style="text-align:center;padding:24px 16px;position:relative;overflow:hidden;">
        <div style="position:absolute;top:12px;right:14px;font-size:1.1rem;opacity:0.08;">{{ $card['icon'] }}</div>
        <div style="font-family:var(--font-serif);font-size:2rem;font-weight:500;color:{{ $card['color'] }};line-height:1;">{{ $card['val'] }}</div>
        <div style="font-size:0.66rem;color:var(--ink-mute);margin-top:8px;text-transform:uppercase;letter-spacing:.1em;font-weight:600;">{{ $card['label'] }}</div>
    </div>
    @endforeach
</div>

<div style="display:grid;grid-template-columns:2fr 1fr;gap:20px;">

    <div class="card-panel" style="padding:0;overflow:hidden;">
        <div style="padding:18px 22px;border-bottom:1px solid var(--border);font-size:0.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:var(--ink3);">{{ __('lang.recent_orders') }}</div>
        @if($recent->isEmpty())
        <div style="padding:40px;text-align:center;color:var(--ink-mute);font-size:0.85rem;font-style:italic;font-family:var(--font-serif);">{{ __('lang.no_orders') }}</div>
        @else
        <table class="table-ms">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('lang.name') }}</th>
                    <th>{{ __('lang.quantity') }}</th>
                    <th>{{ __('lang.total_price') }}</th>
                    <th>{{ __('lang.date') }}</th>
                    <th>{{ __('lang.status') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($recent as $order)
                <tr>
                    <td style="color:var(--ink-mute);font-size:0.76rem;font-weight:500;">#{{ $order->id }}</td>
                    <td style="font-weight:600;">{{ $order->customer_name }}</td>
                    <td>{{ $order->tile_quantity }}</td>
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

    <div>
        <div class="card-panel">
            <div class="card-panel-title">{{ __('lang.breakdown') }}</div>
            @php
            $statuses = [
                'pending'   => ['color' => '#D97706', 'count' => $stats['pending']],
                'confirmed' => ['color' => '#2563EB', 'count' => $stats['confirmed']],
                'shipped'   => ['color' => '#059669', 'count' => $stats['shipped']],
                'cancelled' => ['color' => '#6B7280', 'count' => $stats['cancelled']],
            ];
            @endphp
            @foreach($statuses as $key => $data)
            <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 0;{{ !$loop->last ? 'border-bottom:1px solid var(--border);' : '' }}font-size:0.84rem;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <span style="width:8px;height:8px;border-radius:50%;background:{{ $data['color'] }};display:inline-block;flex-shrink:0;"></span>
                    <span class="badge-status badge-{{ $key }}">{{ __('lang.status_' . $key) }}</span>
                </div>
                <strong style="font-family:var(--font-serif);font-size:1.1rem;">{{ $data['count'] }}</strong>
            </div>
            @endforeach
            <div style="margin-top:18px;padding-top:18px;border-top:2px solid var(--border);display:flex;justify-content:space-between;align-items:center;font-size:0.84rem;">
                <span style="color:var(--ink3);font-weight:500;">{{ __('lang.total_users') }}</span>
                <strong style="font-family:var(--font-serif);font-size:1.1rem;color:var(--terra);">{{ $stats['users'] }}</strong>
            </div>
        </div>
    </div>

</div>
@endsection
