<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RekapitulasiController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');//->middleware('guest');
Route::post('/login', [AuthController::class, 'cekLogin']);
Route::get('/daftar', [AuthController::class, 'daftar']);//->middleware('guest');
Route::post('/daftar', [AuthController::class, 'newUser']);//->middleware('guest');


Route::get('/', [RekapitulasiController::class, 'index'])->middleware('auth');
Route::post('/', [RekapitulasiController::class, 'store'])->middleware('auth');
Route::put('/edit/{id}', [RekapitulasiController::class, 'update'])->middleware('auth');
Route::delete('/hapus/{id}', [RekapitulasiController::class, 'destroy'])->middleware('auth');

Route::get('/detail-{id}', [RekapitulasiController::class, 'show'])->middleware('auth');


Route::get('/rekapitulasi-export', [RekapitulasiController::class, 'export'])->middleware('auth');
Route::post('/rekapitulasi-import', [RekapitulasiController::class, 'import'])->middleware('auth');
// Route::view('/daftar', 'daftar'); 
