<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

Route::get('/', [GameController::class, 'index']);

Route::get('/search', [GameController::class, 'search']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/apex', function () {
    return view('apex');
});

Route::get('/genshin', function () {
    return view('genshin');
});

Route::get('/honkai', function () {
    return view('honkai');
});

Route::get('/azur-lane', function () {
    return view('azurlane');
});

Route::get('/blue-archive', function () {
    return view('bluearchive');
});

Route::get('/mobile-legends', function () {
    return view('mobilelegends');
});

Route::get('/valorant', function () {
    return view('valorant');
});

Route::get('/wuthering-waves', function () {
    return view('wutheringwaves');
});
