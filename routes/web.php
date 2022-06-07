<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Register
Route::get('register-index', [App\Http\Controllers\HomeController::class, 'registerIndex'])->name('register.index');
Route::post('register-index-update/{id}', [App\Http\Controllers\HomeController::class, 'registerIndexUpdate'])->name('register.index.update');

// showServerIp
Route::get('showServerIp', [App\Http\Controllers\HerOkuController::class, 'getServerIpFromHerOku'])->name('showServerIp');
