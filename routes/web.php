<?php

namespace App\Http\Controllers;
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

// Route::get('/', function () {
//     echo "Hello World";
// });

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');


Route::group(['prefix' => 'admin','middleware'=>['auth'], 'as'=>'admin.'], function(){
    Route::get('/home',[HomeController::class,'home'])->name('home');
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/history',[HomeController::class,'history'])->name('history');

    Route::post('/kategori',[HomeController::class,'kategori'])->name('kategori');
    Route::post('/kategori-history',[HomeController::class,'kategori_history'])->name('kategori-history');
    Route::put('/claim-proses/{id}',[HomeController::class,'claim_proses'])->name('claim-proses');
    Route::put('/remove-proses/{id}',[HomeController::class,'remove_proses'])->name('remove-proses');
});
