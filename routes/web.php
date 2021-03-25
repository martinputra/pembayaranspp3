<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('fitur.dashboard');
});
Route::get('/crud-siswa', [SiswaController::class, 'index'])->name('crud.siswa');
Route::get('/create-siswa', [SiswaController::class, 'create'])->name('create.siswa');
Route::post('/crud-siswa', [SiswaController::class, 'store'])->name('add.siswa');
Route::get('/crud-spp', [SppController::class, 'index'])->name('crud.spp');
