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

Route::group(['middleware' => ['auth','ceklevel:admin,santri']], function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    // Daftar User Admin & Santri
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/add-user', [UserController::class, 'adduser'])->name('adduser');
    Route::post('/insert-user', [UserController::class, 'insertuser'])->name('insertuser');
    Route::get('/show-user/{id}', [UserController::class, 'showuser'])->name('showuser');
    Route::post('/edit-user/{id}', [UserController::class, 'edituser'])->name('edituser');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
});

Route::group(['middleware' => ['auth', 'ceklevel:santri']], function(){
    Route::get('/presensi-masuk', [PresensiController::class, 'index'])->name('presensi-masuk');
    Route::post('/simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
});


