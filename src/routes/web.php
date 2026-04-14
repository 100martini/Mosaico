<?php

use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerProfile;
use App\Http\Controllers\ControllerDesign;
use App\Http\Controllers\ControllerOrder;
use App\Http\Controllers\ControllerAdmin;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('langSelect');
});

Route::get('/lang/{locale}', function (Request $request, $locale) {
    $supported = ['en', 'fr', 'es', 'gr'];
    if (in_array($locale, $supported)) {
        session(['locale' => $locale]);
    }
    $next = $request->query('next');
    if ($next) {
        return redirect($next);
    }
    return redirect()->back()->withInput();
})->name('lang.switch');

Route::middleware('guest')->group(function () {
    Route::get('/login',      [ControllerLogin::class, 'showLoginForm'])->name('login');
    Route::post('/login',     [ControllerLogin::class, 'login'])->name('login.post');
    Route::post('/register',  [ControllerLogin::class, 'register'])->name('register.post');

    Route::get('/password/reset',         [ControllerLogin::class, 'showForgotForm'])->name('password.request');
    Route::post('/password/email',        [ControllerLogin::class, 'sendResetLink'])->name('password.email');
    Route::get('/password/reset/{token}', [ControllerLogin::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset',        [ControllerLogin::class, 'resetPassword'])->name('password.update');
});

Route::middleware('auth')->group(function () {

    Route::get('/home', function (Request $request) {
        $loadDesign   = null;
        $loadDesignId = null;
        if ($request->has('load')) {
            $design = Design::where('id', $request->load)
                ->where('user_id', auth()->id())
                ->first();
            if ($design) {
                $loadDesign   = $design->snapshot;
                $loadDesignId = $design->id;
            }
        }
        return view('home', compact('loadDesign', 'loadDesignId'));
    })->name('home');

    Route::post('/logout', [ControllerLogin::class, 'logout'])->name('logout');

    Route::get('/profile',          [ControllerProfile::class, 'show'])->name('profile');
    Route::put('/profile',          [ControllerProfile::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ControllerProfile::class, 'updatePassword'])->name('profile.password');

    Route::get('/designs',               [ControllerDesign::class, 'index'])->name('designs.index');
    Route::post('/designs',              [ControllerDesign::class, 'store'])->name('designs.store');
    Route::get('/designs/{design}',      [ControllerDesign::class, 'show'])->name('designs.show');
    Route::delete('/designs/{design}',   [ControllerDesign::class, 'destroy'])->name('designs.destroy');
    Route::get('/designs/{design}/load', [ControllerDesign::class, 'loadIntoStudio'])->name('designs.load');

    Route::get('/orders/create',          [ControllerOrder::class, 'create'])->name('orders.create');
    Route::post('/orders',                [ControllerOrder::class, 'store'])->name('orders.store');
    Route::get('/orders',                 [ControllerOrder::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}',         [ControllerOrder::class, 'show'])->name('orders.show');
    Route::patch('/orders/{order}/cancel',[ControllerOrder::class, 'cancel'])->name('orders.cancel');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard',               [ControllerAdmin::class, 'dashboard'])->name('dashboard');
    Route::get('/',                        [ControllerAdmin::class, 'index'])->name('orders');
    Route::get('/orders/{order}',          [ControllerAdmin::class, 'show'])->name('orders.show');
    Route::patch('/orders/{order}/status', [ControllerAdmin::class, 'updateStatus'])->name('orders.status');
});
