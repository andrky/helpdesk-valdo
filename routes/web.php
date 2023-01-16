<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ChangePasswordController;

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


Route::get('/dashboard', function() {
	return view('index',[
		'title' => "Dashboard"
	]);
})->middleware('auth');

Route::resource('/divisi', DivisiController::class)->middleware('auth');
Route::resource('/pengaduan', PengaduanController::class)->middleware('auth');
Route::resource('/team', TeamController::class)->middleware('auth');
Route::resource('/kategori', KategoriController::class)->middleware('auth');
Route::resource('/karyawan', KaryawanController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');

// Route::get('/cp/{user:id}', function() {
// 	return view('password.cp',[x
// 		'title' => "Dashboard"
// 	]);
// })->middleware('auth');

Route::get('/cp/{user:id}', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/cp/{user:id}', [ChangePasswordController::class, 'update']);
