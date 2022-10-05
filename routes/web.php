<?php

use App\Http\Controllers\AuthController;
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
        return view('layouts.main');
    });

    // Daftar User Admin & Santri
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/tambah-user', [UserController::class, 'tambahuser'])->name('tambahuser');
    Route::post('/insertuser', [UserController::class, 'insertuser'])->name('insertuser');
});


