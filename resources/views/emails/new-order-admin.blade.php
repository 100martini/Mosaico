<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body { font-family: -apple-system, 'Segoe UI', Helvetica, Arial, sans-serif; background:#F5F2ED; margin:0; padding:0; color:#1E1916; }
.wrap { max-width:560px; margin:32px auto; background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.06); }
.header { background:#1E1916; padding:28px 40px; text-align:center; }
.header img { height:28px; opacity:0.9; }
.body { padding:36px 40px; }
h2 { margin:0 0 4px; font-size:1.15rem; color:#1E1916; font-weight:700; }
.sub { color:#7A6E68; font-size:0.82rem; margin:0 0 24px; }
.row { display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #EDE8E1; font-size:0.85rem; }
.row:last-child { border:none; }
.label { color:#7A6E68; }
.val { font-weight:600; text-align:right; }
.btn { display:inline-block; background:#B34A32; color:#fff; padding:12px 28px; border-radius:8px; text-decoration:none; font-size:0.82rem; font-weight:600; margin-top:24px; letter-spacing:0.04em; }
.footer { background:#F5F2ED; padding:20px 40px; font-size:0.72rem; color:#B0A69E; text-align:center; letter-spacing:0.04em; }
</style>
</head>
<body>
<div class="wrap">
    <div class="header">
        <img src="{{ asset('images/logoFinalWHITE.png') }}" alt="Mosaico"/>
    </div>
    <div class="body">
        <h2>New order received — #{{ $order->id }}</h2>
        <p class="sub">{{ $order->created_at->format('d/m/Y H:i') }}</p>

        <div class="row"><span class="label">Customer</span><span class="val">{{ $order->customer_name }}</span></div>
        <div class="row"><span class="label">Email</span><span class="val">{{ $order->customer_email }}</span></div>
        <div class="row"><span class="label">Phone</span><span class="val">{{ $order->customer_phone ?? '–' }}</span></div>
        <div class="row"><span class="label">Design</span><span class="val">{{ $order->design?->name ?? '–' }}</span></div>
        <div class="row"><span class="label">Area</span><span class="val">{{ $order->room_width }} × {{ $order->room_height }} m²</span></div>
        <div class="row"><span class="label">Tiles</span><span class="val">{{ $order->tile_quantity }}</span></div>
        <div class="row"><span class="label">Total</span><span class="val" style="color:#B34A32;font-size:1rem;">€{{ number_format($order->totalPrice(), 2) }}</span></div>
        <div class="row"><span class="label">Address</span><span class="val" style="max-width:240px;">{{ $order->delivery_address }}</span></div>
        @if($order->notes)
        <div class="row"><span class="label">Notes</span><span class="val" style="max-width:240px;">{{ $order->notes }}</span></div>
        @endif

        <a href="{{ route('admin.orders.show', $order) }}" class="btn">View in admin panel →</a>
    </div>
    <div class="footer">Mosaico — Admin Notification</div>
</div>
</body>
</html>
