<?php

use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\KnowledgeManagementController;


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

// Route::get('/', function () {
//     return view('layout.main');
// });

// Route::get('/', function () {
//   return view('index');
// });

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/dashboard', DashboardController::class)->except('show')->middleware('auth');
Route::resource('/divisi', DivisiController::class)->except('show')->middleware('auth');
Route::resource('/pengaduan', PengaduanController::class)->except('show')->middleware('auth');
Route::resource('/team', TeamController::class)->except('show')->middleware('auth');
Route::resource('/kategori', KategoriController::class)->except('show')->middleware('auth');
Route::resource('/karyawan', KaryawanController::class)->except('show')->middleware('auth');
Route::resource('/user', UserController::class)->except('show')->middleware('auth');
Route::resource('/laporan', LaporanController::class)->except('show')->middleware('auth');
Route::resource('/km', KnowledgeManagementController::class)->except('show')->middleware('auth');
Route::get('/cp/{user:id}', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/cp/{user:id}', [ChangePasswordController::class, 'update']);
Route::get('/exportlaporan', [LaporanController::class, 'export'])->middleware('auth');
