<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.app-site');
})->name('home');

Route::group(['prefix' => 'admin', 'middleware' => []], function () {
    Route::resources([
        'users' => UserController::class,
        'roles' => RoleController::class,
    ]);
});
