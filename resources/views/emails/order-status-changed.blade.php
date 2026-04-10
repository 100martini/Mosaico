<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body { font-family: -apple-system, 'Segoe UI', Helvetica, Arial, sans-serif; background:#F5F2ED; margin:0; padding:0; color:#1E1916; }
.wrap { max-width:560px; margin:32px auto; background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.06); }
.header { background:linear-gradient(135deg, #B34A32, #8C3522); padding:32px 40px; text-align:center; }
.header img { height:28px; }
.body { padding:36px 40px; }
h2 { margin:0 0 4px; font-size:1.15rem; color:#1E1916; font-weight:700; }
.sub { color:#7A6E68; font-size:0.82rem; margin:0 0 24px; }
.status-box { border-radius:12px; padding:20px 24px; margin:20px 0; text-align:center; font-weight:700; font-size:1.05rem; letter-spacing:.04em; }
.row { display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #EDE8E1; font-size:0.85rem; }
.row:last-child { border:none; }
.label { color:#7A6E68; }
.val { font-weight:600; }
.footer { background:#F5F2ED; padding:20px 40px; font-size:0.72rem; color:#B0A69E; text-align:center; letter-spacing:0.04em; }
</style>
</head>
<body>
<div class="wrap">
    <div class="header">
        <img src="{{ asset('images/logoFinalWHITE.png') }}" alt="Mosaico"/>
    </div>
    <div class="body">
        <h2>{{ __('lang.email_status_changed') }}</h2>
        <p class="sub">{{ __('lang.order_detail') }} #{{ $order->id }} · {{ now()->format('d/m/Y') }}</p>

        <div class="status-box" style="background:{{ $order->statusColor() }}12;color:{{ $order->statusColor() }};border:1.5px solid {{ $order->statusColor() }}30;">
            {{ $order->statusLabel() }}
        </div>

        <div class="row"><span class="label">{{ __('lang.name') }}</span><span class="val">{{ $order->customer_name }}</span></div>
        <div class="row"><span class="label">{{ __('lang.design') }}</span><span class="val">{{ $order->design?->name ?? '–' }}</span></div>
        <div class="row"><span class="label">{{ __('lang.quantity') }}</span><span class="val">{{ $order->tile_quantity }} {{ __('lang.tiles_unit') }}</span></div>
        <div class="row"><span class="label">{{ __('lang.total_price') }}</span><span class="val" style="color:#B34A32;font-size:1rem;">€{{ number_format($order->totalPrice(), 2) }}</span></div>
    </div>
    <div class="footer">Mosaico · {{ __('lang.email_footer') }}</div>
</div>
</body>
</html>
