<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>MOSAICO</title>
        <link rel="stylesheet" href="{{ asset('css/mosaico_style.css') }}">
    </head>
    <body class="page-lang">

        <div class="lang-logo-wrap">
            <img src="{{ asset('images/logoFinal.png') }}" alt="Mosaico"/>
        </div>

        <p class="lang-tagline">your favourite italian tile company</p>

        <div class="lang-grid">
            <a href="{{ route('lang.switch', 'en') }}?next={{ urlencode(route('login')) }}" class="lang-card">
                <img src="{{ asset('images/flagUK.png') }}" class="flag" alt="EN"/>
                <div class="lang-info">
                    <span class="lang-name">English</span>
                    <span class="lang-native">Stay on English</span>
                </div>
            </a>
            <a href="{{ route('lang.switch', 'es') }}?next={{ urlencode(route('login')) }}" class="lang-card">
                <img src="{{ asset('images/flagSPAIN.png') }}" class="flag" alt="ES"/>
                <div class="lang-info">
                    <span class="lang-name">Español</span>
                    <span class="lang-native">Edición española</span>
                </div>
            </a>
            <a href="{{ route('lang.switch', 'fr') }}?next={{ urlencode(route('login')) }}" class="lang-card">
                <img src="{{ asset('images/flagFRANCE.png') }}" class="flag" alt="FR"/>
                <div class="lang-info">
                    <span class="lang-name">Français</span>
                    <span class="lang-native">Édition française</span>
                </div>
            </a>
            <a href="{{ route('lang.switch', 'gr') }}?next={{ urlencode(route('login')) }}" class="lang-card">
                <img src="{{ asset('images/flagGERMANY.png') }}" class="flag" alt="DE"/>
                <div class="lang-info">
                    <span class="lang-name">Deutsch</span>
                    <span class="lang-native">Deutschland-Ausgabe</span>
                </div>
            </a>
        </div>

        <p class="lang-footer">© 2020 - Mosaico</p>

    </body>
</html>
