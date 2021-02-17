<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilsController;
use App\Http\Controllers\MatkulsController;
use App\Http\Controllers\AbsensController;

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

Route::get('', [ProfilsController::class, 'index']);

Route::view('/home', 'homes/index');
Route::view('/jadwal', 'jadwals/index');

Route::resources([
    'mahasiswa' => ProfilsController::class,
    'matakuliah' => MatkulsController::class,
    'absensi' => AbsensController::class]);