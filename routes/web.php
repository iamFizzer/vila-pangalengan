<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/destinasi',[DestinasiController::class, 'destinasi'])->name('destinasi');
Route::get('/admin/destinasi/tambah',[DestinasiController::class, 'tambah']);
Route::post('/admin/destinasi/add',[DestinasiController::class, 'store']);
