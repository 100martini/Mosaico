@extends('layouts.app')
@section('title', __('lang.my_designs_title') . ' — Mosaico')

@section('content')
<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;">
    <div class="page-title" style="margin-bottom:0;">{{ __('lang.my_designs_title') }}</div>
    <a href="{{ route('home') }}" class="btn-ms btn-ms-primary">{{ __('lang.new_design') }}</a>
</div>

@if($designs->isEmpty())
    <div class="card-panel">
        <div class="empty-state">
            <div class="empty-state-text">{{ __('lang.no_designs') }}</div>
            <a href="{{ route('home') }}" class="btn-ms btn-ms-primary" style="margin-top:20px;">{{ __('lang.first_design') }}</a>
        </div>
    </div>
@else
    <div class="designs-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:18px;">
        @foreach($designs as $design)
        <div class="card-panel" style="padding:0;overflow:hidden;">
            @if(!empty($design->snapshot['thumbnail']))
                <div style="height:140px;overflow:hidden;border-bottom:1px solid var(--border);background:var(--off2);">
                    <img src="{{ $design->snapshot['thumbnail'] }}"
                         alt="{{ $design->name }}"
                         style="width:100%;height:100%;object-fit:cover;display:block;">
                </div>
            @else
                <div style="height:140px;background:linear-gradient(135deg, var(--off2), var(--off));display:flex;align-items:center;justify-content:center;border-bottom:1px solid var(--border);">
                    <span style="font-size:2.5rem;opacity:0.08;">⬛</span>
                </div>
            @endif
            <div style="padding:18px;">
                <div style="font-weight:600;font-size:0.88rem;color:var(--ink);margin-bottom:4px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $design->name }}</div>
                <div style="font-size:0.7rem;color:var(--ink-mute);margin-bottom:16px;">{{ $design->created_at->format('d/m/Y') }}</div>
                <div style="display:flex;gap:8px;flex-wrap:wrap;">
                    <a href="{{ route('designs.load', $design) }}" class="btn-ms btn-ms-primary" style="font-size:0.68rem;padding:6px 12px;">{{ __('lang.load_in_studio') }}</a>
                    <a href="{{ route('orders.create', ['design_id' => $design->id]) }}" class="btn-ms btn-ms-outline" style="font-size:0.68rem;padding:6px 12px;">{{ __('lang.order') }}</a>
                    <form method="POST" action="{{ route('designs.destroy', $design) }}" onsubmit="return confirm('{{ __('lang.delete_confirm') }}')" style="margin:0;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn-ms btn-ms-danger" style="font-size:0.68rem;padding:6px 12px;">✕</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div style="margin-top:24px;">{{ $designs->links() }}</div>
@endif
@endsection
