<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mosaico')</title>
    <link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
    <style>
        *, *::before, *::after { box-sizing: border-box !important; }
        body {
            background: var(--off);
            min-height: 100vh;
            overflow: auto !important;
            margin: 0;
        }
    </style>
    @yield('styles')
</head>
<body>
    <nav class="app-nav">
        <a href="{{ route('home') }}" class="app-nav-logo">MOSAICO</a>
        <div class="app-nav-links">
            <a href="{{ route('home') }}" class="app-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">{{ __('lang.studio') }}</a>
            <a href="{{ route('designs.index') }}" class="app-nav-link {{ request()->routeIs('designs.*') ? 'active' : '' }}">{{ __('lang.my_designs') }}</a>
            <a href="{{ route('orders.index') }}" class="app-nav-link {{ request()->routeIs('orders.*') ? 'active' : '' }}">{{ __('lang.my_orders') }}</a>
            @if(auth()->user()->isAdmin())
                <a href="{{ route('admin.dashboard') }}" class="app-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" style="color:var(--terra);">{{ __('lang.dashboard') }}</a>
                <a href="{{ route('admin.orders') }}" class="app-nav-link {{ request()->routeIs('admin.orders*') ? 'active' : '' }}" style="color:var(--terra);">Admin</a>
            @endif
        </div>
        <div class="app-nav-right">
            <div class="lang-switcher">
                @foreach(['en' => 'EN', 'fr' => 'FR', 'es' => 'ES', 'gr' => 'DE'] as $code => $label)
                    <a href="{{ route('lang.switch', $code) }}"
                       class="{{ app()->getLocale() === $code ? 'active-lang' : '' }}">{{ $label }}</a>
                @endforeach
            </div>
            <a href="{{ route('profile') }}" class="app-nav-link {{ request()->routeIs('profile') ? 'active' : '' }}">{{ auth()->user()->name }}</a>
            <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                @csrf
                <button type="submit" class="app-nav-btn">{{ __('lang.logout') }}</button>
            </form>
        </div>
    </nav>

    <div class="app-content">
        @if(session('status'))
            <div class="alert-ms alert-ms-success">{{ session('status') }}</div>
        @endif
        @if($errors->any())
            <div class="alert-ms alert-ms-error">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
