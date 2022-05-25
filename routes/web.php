<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
    return view('login');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/daftar', [LoginController::class, 'daftar'])->name('daftar');
Route::post('/daftarpost', [LoginController::class,'daftarpost'])->name('daftarpost');

Route::get('/dashboard', [LoginController::class, 'ayam'])->name('dashboard');