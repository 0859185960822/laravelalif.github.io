<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('layout.home');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/data_gaji_dktr', function () {
    return view('layout.data_gaji_dktr');
})->name('data_gaji_dktr');

Route::get('/antrian', function () {
    return view('layout.antrian');
})->name('antrian');

Route::get('/kantor_sma', function () {
    return view('layout.kantor_sma');
})->name('kantor_sma');

Route::get('/kasir', function () {
    return view('layout.kasir');
})->name('kasir');

Route::get('/pingpong', function () {
    return view('layout.pingpong');
})->name('pingpong');

Route::get('/sekai', function () {
    return view('layout.sekai');
})->name('sekai');

Route::get('/smart_home', function () {
    return view('layout.smart_home');
})->name('smart_home');

Route::get('/vlan', function () {
    return view('layout.vlan');
})->name('vlan');

Route::get('/home', function () {
    return view('layout.home');
})->name('home');