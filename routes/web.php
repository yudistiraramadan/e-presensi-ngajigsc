<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PresensiController;
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


Route::get('/', [AuthController::class, 'loginpage'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function (){
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/add-user', [UserController::class, 'adduser'])->name('adduser');
    Route::post('/insert-user', [UserController::class, 'insertuser'])->name('insertuser');
    Route::get('/show-user/{id}', [UserController::class, 'showuser'])->name('showuser');
    Route::post('/edit-user/{id}', [UserController::class, 'edituser'])->name('edituser');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
});

Route::group(['middleware' => ['auth', 'ceklevel:santri']], function(){
    Route::get('/presensi-masuk', [PresensiController::class, 'presensimasuk'])->name('presensi-masuk');
    Route::get('/presensi-keluar', [PresensiController::class, 'presensikeluar'])->name('presensi-keluar');
    Route::post('/simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
    Route::post('/simpan-keluar', [PresensiController::class, 'storekeluar'])->name('simpan-keluar');
    Route::get('/filter-data/', [PresensiController::class, 'halamanrekap'])->name('filter-data');
    Route::get('/filter-data/{tglawal}/{tglakhir}', [PresensiController::class, 'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
});


