@extends('layouts.app')
@section('title', __('lang.my_profile') . ' — Mosaico')

@section('content')
<div class="page-title">{{ __('lang.my_profile') }}</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

    <div class="card-panel">
        <div class="card-panel-title">{{ __('lang.personal_info') }}</div>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div style="margin-bottom:18px;">
                <label class="form-label-sm">{{ __('lang.name') }}</label>
                <input class="form-control-ms" type="text" name="name" value="{{ old('name', $user->name) }}" required>
            </div>
            <div style="margin-bottom:18px;">
                <label class="form-label-sm">{{ __('lang.email') }}</label>
                <input class="form-control-ms" type="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>
            <div style="margin-bottom:18px;">
                <label class="form-label-sm">{{ __('lang.phone') }}</label>
                <input class="form-control-ms" type="tel" name="phone" value="{{ old('phone', $user->phone) }}">
            </div>
            <div style="margin-bottom:24px;">
                <label class="form-label-sm">{{ __('lang.address') }}</label>
                <textarea class="form-control-ms" name="address" rows="3" style="resize:vertical;">{{ old('address', $user->address) }}</textarea>
            </div>
            <button type="submit" class="btn-ms btn-ms-primary">{{ __('lang.save') }}</button>
        </form>
    </div>

    <div class="card-panel">
        <div class="card-panel-title">{{ __('lang.change_password') }}</div>
        <form method="POST" action="{{ route('profile.password') }}">
            @csrf
            @method('PUT')
            <div style="margin-bottom:18px;">
                <label class="form-label-sm">{{ __('lang.current_password') }}</label>
                <input class="form-control-ms" type="password" name="current_password" required>
            </div>
            <div style="margin-bottom:18px;">
                <label class="form-label-sm">{{ __('lang.new_password') }}</label>
                <input class="form-control-ms" type="password" name="password" required>
            </div>
            <div style="margin-bottom:24px;">
                <label class="form-label-sm">{{ __('lang.confirm_password') }}</label>
                <input class="form-control-ms" type="password" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn-ms btn-ms-outline">{{ __('lang.change_password') }}</button>
        </form>
    </div>

</div>

<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:4px;">
    @php
    $stats = [
        ['count' => auth()->user()->designs()->count(), 'label' => __('lang.designs_saved'), 'icon' => ''],
        ['count' => auth()->user()->orders()->count(), 'label' => __('lang.orders_count'), 'icon' => ''],
        ['count' => auth()->user()->orders()->where('status','shipped')->count(), 'label' => __('lang.shipped_count'), 'icon' => ''],
    ];
    @endphp
    @foreach($stats as $i => $stat)
    <div class="card-panel" style="text-align:center;padding:24px 20px;position:relative;overflow:hidden;">
        <div style="position:absolute;top:10px;right:14px;font-size:1.2rem;opacity:0.08;">{{ $stat['icon'] }}</div>
        <div style="font-family:var(--font-serif);font-size:2.2rem;font-weight:500;color:var(--terra);line-height:1;">{{ $stat['count'] }}</div>
        <div style="font-size:0.68rem;color:var(--ink-mute);margin-top:8px;text-transform:uppercase;letter-spacing:.1em;font-weight:600;">{{ $stat['label'] }}</div>
    </div>
    @endforeach
</div>
@endsection
