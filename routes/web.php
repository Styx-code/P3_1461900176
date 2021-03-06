<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/home0176', [HomeController::class, 'index']);
Route::get('dokter0176/{id}/hapus', [DokterController::class, 'destroy']);
Route::get('pasien0176/{id}/hapus', [PasienController::class, 'destroy']);
Route::resource('dokter0176', DokterController::class);
Route::resource('pasien0176', PasienController::class);
Route::resource('user0176', UserController::class);