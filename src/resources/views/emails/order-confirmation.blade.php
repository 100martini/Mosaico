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
.sub { color:#7A6E68; font-size:0.82rem; margin:0 0 28px; }
.row { display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #EDE8E1; font-size:0.85rem; }
.row:last-child { border:none; }
.label { color:#7A6E68; }
.val { font-weight:600; text-align:right; }
.total-box { background:linear-gradient(135deg, rgba(179,74,50,0.04), rgba(179,74,50,0.08)); border:1.5px solid rgba(179,74,50,0.12); border-radius:12px; padding:20px 24px; margin:24px 0 20px; display:flex; justify-content:space-between; align-items:center; }
.total-label { font-size:0.72rem; text-transform:uppercase; letter-spacing:.1em; color:#7A6E68; font-weight:600; }
.total-sub { font-size:0.75rem; color:#B0A69E; margin-top:4px; }
.total-val { font-size:1.6rem; font-weight:700; color:#B34A32; }
.note { font-size:0.82rem; color:#7A6E68; line-height:1.65; margin:0; }
.footer { background:#F5F2ED; padding:20px 40px; font-size:0.72rem; color:#B0A69E; text-align:center; letter-spacing:0.04em; }
</style>
</head>
<body>
<div class="wrap">
    <div class="header">
        <img src="{{ asset('images/logoFinalWHITE.png') }}" alt="Mosaico"/>
    </div>
    <div class="body">
        <h2>{{ __('lang.order_success') }}</h2>
        <p class="sub">{{ __('lang.order_detail') }} #{{ $order->id }} · {{ $order->created_at->format('d/m/Y') }}</p>

        <div class="row"><span class="label">{{ __('lang.name') }}</span><span class="val">{{ $order->customer_name }}</span></div>
        <div class="row"><span class="label">{{ __('lang.design') }}</span><span class="val">{{ $order->design?->name ?? '–' }}</span></div>
        <div class="row"><span class="label">{{ __('lang.surface') }}</span><span class="val">{{ $order->room_width }} × {{ $order->room_height }} m²</span></div>
        <div class="row"><span class="label">{{ __('lang.quantity') }}</span><span class="val">{{ $order->tile_quantity }} {{ __('lang.tiles_unit') }}</span></div>
        <div class="row"><span class="label">{{ __('lang.address') }}</span><span class="val" style="max-width:240px;">{{ $order->delivery_address }}</span></div>
        <div class="row"><span class="label">{{ __('lang.status') }}</span><span class="val">{{ $order->statusLabel() }}</span></div>

        <div class="total-box">
            <div>
                <div class="total-label">{{ __('lang.total_price') }}</div>
                <div class="total-sub">{{ $order->tile_quantity }} × €{{ number_format(\App\Models\Order::PRICE_PER_TILE, 2) }}</div>
            </div>
            <div class="total-val">€{{ number_format($order->totalPrice(), 2) }}</div>
        </div>

        <p class="note">{{ __('lang.email_order_info') }}</p>
    </div>
    <div class="footer">Mosaico · {{ __('lang.email_footer') }}</div>
</div>
</body>
</html>
