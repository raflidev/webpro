<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
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

Route::view('/about', 'rafli');

Route::get('/auth', function () {
    if (session()->has('email')) return redirect('/product');
    return view('login');
});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/auth');
});

Route::post('/auth', [SiteController::class, 'auth'])->name('login');

Route::resource('product', ProductController::class)->middleware('auth');
