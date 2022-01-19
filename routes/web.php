<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PertanyaanController;

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


Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('informasi', [GuestController::class, 'informasi'])->name('informasi');
Route::get('pertanyaan', [GuestController::class, 'pertanyaan'])->name('pertanyaan');
Route::get('about', [GuestController::class, 'about'])->name('about');

//pertanyaan
Route::resource('pertanyaan', PertanyaanController::class);
// Route::get('pertanyaan', [PertanyaanController::class, 'index'])->name('pertanyaan');
// Route::post('simpan-pertanyaan', [PertanyaanController::class, 'store'])->name('simpan-pertanyaan');