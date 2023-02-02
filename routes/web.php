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
    return view('webpage');
});

Route::get('/cariwisata', function () {
    return view('cari_wisata');
});



Route::get('/promo', function () {
    return view('promo');
});
Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('SignUp');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pesan', [App\Http\Controllers\PesanController::class, 'index'])->middleware(['auth'])->name('pesan');
Route::get('/guide/{id?}/{paket?}', [App\Http\Controllers\GuideController::class, 'index'])->name('guide');
Route::get('/bayar/{id?}/{paket?}', [App\Http\Controllers\BayarController::class, 'index'])->name('bayar');
Route::get('/jadwal/{id?}', [App\Http\Controllers\JadwalController::class, 'index'])->name('jadwal');

Route::post('/pesan',  [App\Http\Controllers\PesanController::class, 'store'])->name('pesan.store');
Route::put('/guide/{id?}/{paket?}',  [App\Http\Controllers\GuideController::class, 'store'])->name('guide.store');