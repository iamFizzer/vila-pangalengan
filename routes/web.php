<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PaketController;
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

//Front-end
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/view/destinasi/{id}', [LandingController::class, 'views']);


Auth::routes();

Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('home');

//Destinasi
Route::get('/admin/destinasi',[DestinasiController::class, 'destinasi'])->name('destinasi');
Route::get('/admin/destinasi/tambah',[DestinasiController::class, 'tambah']);
Route::get('/admin/destinasi/edit/{id}',[DestinasiController::class, 'edit']);
Route::post('/admin/destinasi/add',[DestinasiController::class, 'store']);
Route::post('/admin/destinasi/update/{id}',[DestinasiController::class, 'update']);
Route::post('/admin/destinasi/delete/{id}',[DestinasiController::class, 'delete']);
Route::get('/admin/destinasi/detail/{id}',[DestinasiController::class, 'detail']);


//Paket
Route::get('/admin/paket',[PaketController::class, 'paket'])->name('paket');
Route::get('/admin/paket/tambah',[PaketController::class, 'tambah']);
Route::post('/admin/paket/add',[PaketController::class, 'store']);