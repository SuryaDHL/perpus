<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('login/submit', [AuthController::class,'loginsubmit'])->name('loginsubmit');

Route::get('/daftar', [AuthController::class, 'daftar'])->name('registration');
Route::post('/daftarpost', [AuthController::class,'daftarpost'])->name('daftarpost');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
