<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/panel',[HomeController::class, 'index'])->middleware(['auth'])->name('admin.panel');

Route::get('admin/driver/{id}',[HomeController::class, 'driver'])->middleware(['auth'])->name('admin.driver');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('login', [AuthController::class, 'login'])->name('loguear');

Route::get('/logout', function () {
    session()->flush();
    Auth::logout();
    return view('admin.login');
})->middleware(['auth'])->name('logout');

// Route::get('/optimize', function () {
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('route:clear');
//     return "data is cleared";
// });

// Route::get('/migrate', function () {
//     Artisan::call('migrate:fresh');
//     return "Migrate is cleared";
// });
