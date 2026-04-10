<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 <head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/mosaico_style.css') }}"/>
  <title>MOSAICO</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
 </head>

 <body class="page-login">

  <div class="loader-container">
    <div class="loader"></div>
  </div>

    @if(session('status'))
    <div style="position:fixed;top:20px;left:50%;transform:translateX(-50%);z-index:9999;background:#f0fdf4;color:#15803d;border:1.5px solid #bbf7d0;border-radius:8px;padding:12px 24px;font-size:0.85rem;font-weight:600;box-shadow:0 4px 16px rgba(0,0,0,0.1);">
        {{ session('status') }}
    </div>
    @endif

    <div class="container {{ $errors->register->any() ? 'sign-up-mode' : '' }}">

   <div class="forms-container">
    <div class="signin-signup">

     <form method="POST" action="{{ route('login.post') }}" class="sign-in-form">
      @csrf

      <h2 class="title">{{ __('lang.sign_in') }}</h2>
      <div class="title-accent"></div>
      <p class="form-subtitle">{{ __('lang.welcome_back') }}</p>

      @if ($errors->any() && !$errors->register->any())
       <div class="form-errors">
        <p>{{ $errors->first() }}</p>
       </div>
      @endif

      <div class="input-field {{ ($errors->any() && !$errors->register->any()) ? 'input-error' : '' }}">
       <i class="fas fa-envelope"></i>
       <input type="email" name="email" placeholder="{{ __('lang.email') }}"
              value="{{ old('email') }}" autocomplete="email"/>
      </div>

      <div class="input-field {{ ($errors->any() && !$errors->register->any()) ? 'input-error' : '' }}">
       <i class="fas fa-lock"></i>
       <input type="password" name="password" placeholder="{{ __('lang.password') }}"
              autocomplete="current-password"/>
      </div>

      <div class="form-footer-row">
       <label class="remember-label">
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
        {{ __('lang.remember_me') }}
       </label>
       <a href="{{ route('password.request') }}" class="forgot-password">{{ __('lang.forgot_password') }}</a>
      </div>

      <input class="btn solid btn-wide" type="submit" value="{{ __('lang.sign_in') }}"/>
     </form>

     <form method="POST" action="{{ route('register.post') }}" class="sign-up-form">
      @csrf

      <h2 class="title">{{ __('lang.sign_up') }}</h2>
      <div class="title-accent"></div>
      <p class="form-subtitle">{{ __('lang.start_designing') }}</p>

      @if ($errors->register->any())
       <div class="form-errors">
        <p>{{ $errors->register->first() }}</p>
       </div>
      @endif

      <div class="input-field {{ $errors->register->has('name') ? 'input-error' : '' }}">
       <i class="fas fa-user"></i>
       <input type="text" name="name" placeholder="{{ __('lang.full_name') }}"
              value="{{ old('name') }}" autocomplete="name"/>
      </div>

      <div class="input-field {{ $errors->register->has('email') ? 'input-error' : '' }}">
       <i class="fas fa-envelope"></i>
       <input type="email" name="email" placeholder="{{ __('lang.email') }}"
              value="{{ old('email') }}" autocomplete="email"/>
      </div>

      <div class="input-field {{ $errors->register->has('password') ? 'input-error' : '' }}">
       <i class="fas fa-lock"></i>
       <input type="password" name="password" placeholder="{{ __('lang.password') }}"
              autocomplete="new-password"/>
      </div>

      <div class="input-field">
       <i class="fas fa-lock"></i>
       <input type="password" name="password_confirmation" placeholder="{{ __('lang.confirm_password') }}"
              autocomplete="new-password"/>
      </div>

      <input type="submit" class="btn btn-wide" value="{{ __('lang.sign_up') }}"/>
     </form>

    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <div class="panel-tiles" aria-hidden="true">
       <span></span><span></span><span></span><span></span>
      </div>
      <h3>{{ __('lang.new_here') }}</h3>
      <p>{{ __('lang.panel_new_desc') }}</p>
      <button class="btn transparent" id="sign-up-btn">{{ __('lang.sign_up') }}</button>
     </div>
    </div>
    <div class="panel right-panel">
     <div class="content">
      <div class="panel-tiles" aria-hidden="true">
       <span></span><span></span><span></span><span></span>
      </div>
      <h3>{{ __('lang.have_account') }}</h3>
      <p>{{ __('lang.panel_back_desc') }}</p>
      <button class="btn transparent" id="sign-in-btn">{{ __('lang.sign_in') }}</button>
     </div>
    </div>
   </div>

  </div>

  <script>
   $(window).on("load", function() { $(".loader-container").fadeOut(1000); });

   var CSRF = '{{ csrf_token() }}';
   var HOME = '{{ route("home") }}';

   function showFormError(form, msg) {
      var errBox = form.querySelector('.form-errors');
      if (!errBox) {
         errBox = document.createElement('div');
         errBox.className = 'form-errors';
         errBox.innerHTML = '<p></p>';
         var firstField = form.querySelector('.input-field');
         if (firstField) firstField.before(errBox);
         else form.prepend(errBox);
      }
      errBox.querySelector('p').textContent = msg;
      errBox.style.display = 'block';
      form.querySelectorAll('.input-field').forEach(function(f) { f.classList.add('input-error'); });
   }

   function clearFormError(form) {
      var errBox = form.querySelector('.form-errors');
      if (errBox) { errBox.style.display = 'none'; if (errBox.querySelector('p')) errBox.querySelector('p').textContent = ''; }
      form.querySelectorAll('.input-field').forEach(function(f) { f.classList.remove('input-error'); });
   }

   function extractError(data) {
      if (data.errors) {
         var vals = Object.values(data.errors);
         if (vals.length > 0) {
            var first = vals[0];
            return Array.isArray(first) ? first[0] : first;
         }
      }
      return data.message || 'An error occurred.';
   }

   function ajaxForm(formSel) {
      var form = document.querySelector(formSel);
      if (!form) return;
      form.addEventListener('submit', function(e) {
         e.preventDefault();
         clearFormError(form);

         var btn = form.querySelector('[type=submit]');
         var origVal = btn ? (btn.value || btn.textContent) : '';
         if (btn) { btn.disabled = true; if (btn.tagName === 'INPUT') btn.value = '...'; else btn.textContent = '...'; }

         fetch(form.action, {
            method: 'POST',
            credentials: 'same-origin',
            headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
            body: new FormData(form)
         })
         .then(function(r) {
            return r.text().then(function(text) {
               var data = null;
               try { data = JSON.parse(text); } catch(e) {}
               return { ok: r.ok, status: r.status, data: data, raw: text };
            });
         })
         .then(function(res) {
            if (btn) { btn.disabled = false; if (btn.tagName === 'INPUT') btn.value = origVal; else btn.textContent = origVal; }
            if (res.ok && res.data && res.data.redirect) {
               window.location.href = res.data.redirect;
               return;
            }
            if (res.data) {
               showFormError(form, extractError(res.data));
            } else {
               showFormError(form, 'Server error (' + res.status + '). Please try again.');
            }
         })
         .catch(function() {
            if (btn) { btn.disabled = false; if (btn.tagName === 'INPUT') btn.value = origVal; else btn.textContent = origVal; }
            showFormError(form, 'Connection error. Please try again.');
         });
      });
   }

   ajaxForm('.sign-in-form');
   ajaxForm('.sign-up-form');
  </script>
  <script src="{{ asset('js/events.js') }}"></script>

 </body>
</html>
