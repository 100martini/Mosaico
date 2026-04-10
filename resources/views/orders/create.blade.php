@extends('layouts.app')
@section('title', __('lang.place_order') . ' — Mosaico')

@section('content')
<div class="page-title">{{ __('lang.place_order') }}</div>

<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    @if($design)
        <input type="hidden" name="design_id" value="{{ $design->id }}">
    @endif

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

        <div>
            <div class="card-panel">
                <div class="card-panel-title">{{ __('lang.room_dimensions') }}</div>

                @if($design)
                <div style="background:var(--off);border:1px solid var(--border);border-radius:var(--r);padding:14px 16px;margin-bottom:22px;font-size:0.82rem;color:var(--ink2);display:flex;align-items:center;gap:10px;">
                    <span style="font-size:1rem;">🎨</span>
                    {{ __('lang.selected_design') }} : <strong>{{ $design->name }}</strong>
                </div>
                @endif

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:22px;">
                    <div>
                        <label class="form-label-sm">{{ __('lang.room_width') }}</label>
                        <input class="form-control-ms" type="number" id="room_width" name="room_width"
                               step="0.01" min="0.1" value="{{ old('room_width') }}" required placeholder="4.50">
                    </div>
                    <div>
                        <label class="form-label-sm">{{ __('lang.room_height') }}</label>
                        <input class="form-control-ms" type="number" id="room_height" name="room_height"
                               step="0.01" min="0.1" value="{{ old('room_height') }}" required placeholder="6.00">
                    </div>
                </div>

                <div style="background:linear-gradient(135deg, rgba(179,74,50,0.04), rgba(179,74,50,0.08));border:1.5px solid rgba(179,74,50,0.15);border-radius:var(--r-lg);padding:20px;">
                    <div style="font-size:0.66rem;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:var(--terra);margin-bottom:14px;display:flex;align-items:center;gap:6px;">
                        <span style="font-size:0.8rem;">📐</span> {{ __('lang.estimate') }}
                    </div>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;font-size:0.82rem;color:var(--ink2);">
                        <span>{{ __('lang.surface') }}</span><span id="calc_area" style="font-weight:600;color:var(--ink);text-align:right;">–</span>
                        <span>{{ __('lang.tiles_net') }}</span><span id="calc_net" style="font-weight:600;color:var(--ink);text-align:right;">–</span>
                        <span>{{ __('lang.tiles_total') }}</span><span id="calc_total" style="font-weight:700;color:var(--terra);text-align:right;font-size:0.92rem;">–</span>
                    </div>
                    <div style="margin-top:14px;padding-top:14px;border-top:1px solid rgba(179,74,50,0.12);display:flex;justify-content:space-between;align-items:center;">
                        <span style="font-size:0.78rem;color:var(--ink2);">{{ __('lang.total_price') }}</span>
                        <span id="calc_price" style="font-family:var(--font-serif);font-size:1.4rem;font-weight:600;color:var(--terra);">–</span>
                    </div>
                    <input type="hidden" id="tile_quantity_hidden" name="tile_quantity" value="0">
                    <div style="margin-top:12px;font-size:0.65rem;color:var(--ink-mute);line-height:1.5;">{{ __('lang.tile_size_note') }} · {{ __('lang.price_per_tile') }} : €{{ number_format(\App\Models\Order::PRICE_PER_TILE, 2) }}</div>
                </div>
            </div>
        </div>

        <div>
            <div class="card-panel">
                <div class="card-panel-title">{{ __('lang.delivery') }}</div>
                <div style="margin-bottom:16px;">
                    <label class="form-label-sm">{{ __('lang.full_name') }}</label>
                    <input class="form-control-ms" type="text" name="customer_name"
                           value="{{ old('customer_name', auth()->user()->name) }}" required>
                </div>
                <div style="margin-bottom:16px;">
                    <label class="form-label-sm">{{ __('lang.email') }}</label>
                    <input class="form-control-ms" type="email" name="customer_email"
                           value="{{ old('customer_email', auth()->user()->email) }}" required>
                </div>
                <div style="margin-bottom:16px;">
                    <label class="form-label-sm">{{ __('lang.phone') }}</label>
                    <input class="form-control-ms" type="tel" name="customer_phone"
                           value="{{ old('customer_phone', auth()->user()->phone) }}">
                </div>
                <div style="margin-bottom:16px;">
                    <label class="form-label-sm">{{ __('lang.address') }}</label>
                    <textarea class="form-control-ms" name="delivery_address" rows="3" required style="resize:vertical;">{{ old('delivery_address', auth()->user()->address) }}</textarea>
                </div>
                <div style="margin-bottom:24px;">
                    <label class="form-label-sm">{{ __('lang.notes') }}</label>
                    <textarea class="form-control-ms" name="notes" rows="2" style="resize:vertical;">{{ old('notes') }}</textarea>
                </div>
                <button type="submit" class="btn-ms btn-ms-primary" style="width:100%;justify-content:center;">{{ __('lang.confirm_order') }}</button>
            </div>
        </div>

    </div>
</form>
@endsection

@section('scripts')
<script>
var tilesLabel = "{{ __('lang.tiles_unit') }}";
function recalcTiles() {
    var w = parseFloat(document.getElementById('room_width').value) || 0;
    var h = parseFloat(document.getElementById('room_height').value) || 0;
    var area = Math.round(w * h * 100) / 100;
    var net  = Math.ceil(area * 25);
    var total = Math.ceil(area * 25 * 1.10);
    var price = total > 0 ? (total * {{ \App\Models\Order::PRICE_PER_TILE }}).toFixed(2) : null;
    document.getElementById('calc_area').textContent  = area > 0 ? area + ' m²' : '–';
    document.getElementById('calc_net').textContent   = net > 0  ? net + ' ' + tilesLabel : '–';
    document.getElementById('calc_total').textContent = total > 0 ? total + ' ' + tilesLabel : '–';
    document.getElementById('calc_price').textContent = price ? '€' + price : '–';
    document.getElementById('tile_quantity_hidden').value = total;
}
document.getElementById('room_width').addEventListener('input', recalcTiles);
document.getElementById('room_height').addEventListener('input', recalcTiles);
</script>
@endsection
