<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\site\LoginController;
use App\Http\Controllers\site\UserPlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.pages.home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
    Route::get('profile', [UserPlayerController::class, 'show'])->name('profile');
    Route::get('register', [UserPlayerController::class, 'create'])->name('register.create')
        ->withoutMiddleware('auth');
    Route::post('register', [UserPlayerController::class, 'store'])->name('register.store')
        ->withoutMiddleware('auth');
    Route::delete('profile/{user}', [UserPlayerController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resources([
        'users' => UserAdminController::class,
        'roles' => RoleController::class,
    ]);

    Route::patch('users/{user}/active', [UserAdminController::class, 'active'])->name('users.active');
    Route::patch('roles/{role}/active', [RoleController::class, 'active'])->name('roles.active');
});
