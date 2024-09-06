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

Route::group(['prefix' => '/', 'middleware' => []], function () {
//    Route::resource('register', UserPlayerController::class, ['middleware' => []])
//        ->except(['index']);
    Route::get('profile', [UserPlayerController::class, 'show'])->name('profile');
    Route::get('register', [UserPlayerController::class, 'create'])->name('register.create');
    Route::post('register', [UserPlayerController::class, 'store'])->name('register.store');
    Route::delete('profile/{user}', [UserPlayerController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::resources([
        'users' => UserAdminController::class,
        'roles' => RoleController::class,
    ]);

    // Active User Route
    Route::patch('users/{user}/active', [UserAdminController::class, 'active'])->name('users.active');
});
