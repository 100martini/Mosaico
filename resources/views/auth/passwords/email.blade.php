<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/mosaico_style.css') }}"/>
    <title>{{ __('lang.forgot_password') }} — Mosaico</title>
</head>
<body class="page-login">

<div class="loader-container" id="lc">
    <img src="{{ asset('images/logoFinalWHITE.png') }}" id="logoloader" alt="Mosaico"/>
    <div class="loader"></div>
</div>

<div style="min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px;background:var(--cream);background-image:radial-gradient(ellipse 80% 60% at 20% 10%, rgba(179,74,50,0.04) 0%, transparent 60%);">
    <div style="background:#fff;border-radius:16px;padding:44px 48px;max-width:420px;width:100%;box-shadow:0 16px 48px rgba(0,0,0,0.1);border:1px solid var(--border);">
        <div style="text-align:center;margin-bottom:32px;">
            <img src="{{ asset('images/logoFinal.png') }}" style="height:36px;margin-bottom:20px;" alt="Mosaico"/>
            <h2 style="font-family:var(--font-serif);font-size:1.5rem;font-weight:400;color:var(--ink);margin:0 0 4px;">{{ __('lang.forgot_password_title') }}</h2>
            <div style="width:28px;height:2px;background:linear-gradient(90deg, var(--terra), var(--terra-lt));margin:8px auto 10px;border-radius:2px;"></div>
            <p style="font-size:0.8rem;color:var(--ink-lt);margin:0;letter-spacing:0.02em;">{{ __('lang.forgot_password_desc') }}</p>
        </div>

        @if(session('reset_sent'))
        <div style="background:#F0FDF4;border:1.5px solid #BBF7D0;border-radius:8px;padding:14px 18px;font-size:0.82rem;color:#166534;margin-bottom:20px;font-weight:500;">
            {{ __('lang.reset_link_sent') }}
        </div>
        @endif

        @if($errors->any())
        <div style="background:#FEF2F2;border:1.5px solid #FECACA;border-radius:8px;padding:14px 18px;font-size:0.82rem;color:#991B1B;margin-bottom:20px;">
            {{ $errors->first() }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div style="margin-bottom:22px;">
                <label style="font-size:0.7rem;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--ink-lt);display:block;margin-bottom:6px;">{{ __('lang.email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                    style="width:100%;padding:12px 16px;border:1.5px solid var(--border);border-radius:8px;font-size:0.88rem;font-family:var(--font-sans);color:var(--ink);outline:none;box-sizing:border-box;transition:border-color .2s,box-shadow .2s;"
                    onfocus="this.style.borderColor='var(--terra)';this.style.boxShadow='0 0 0 3px rgba(179,74,50,0.1)'"
                    onblur="this.style.borderColor='var(--border)';this.style.boxShadow='none'"
                    placeholder="you@example.com"/>
            </div>
            <button type="submit" class="btn solid btn-wide" style="width:100%;text-align:center;height:48px;border-radius:8px;">
                {{ __('lang.send_reset_link') }}
            </button>
        </form>

        <div style="text-align:center;margin-top:24px;">
            <a href="{{ route('login') }}" style="font-size:0.8rem;color:var(--terra);text-decoration:none;font-weight:500;transition:opacity .15s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">← {{ __('lang.back_to_login') }}</a>
        </div>
    </div>
</div>

<script>
window.addEventListener('load', function() {
    var lc = document.getElementById('lc');
    lc.style.transition = 'opacity 0.5s';
    lc.style.opacity = '0';
    setTimeout(function() { lc.style.display = 'none'; }, 600);
});
</script>
</body>
</html>
