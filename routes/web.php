<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MontirController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/listBarang', [ListBarangController::class, 'index']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::get('/listBarang', [ProductController::class, 'index'])->middleware('auth');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/montir',[MontirController::class, 'index'])->name('montir');

Route::get('/tambahmontir',[MontirController::class, 'tambahmontir'])->name('tambahmontir');
Route::post('/insertdata', [MontirController::class, 'insertdata'])->name('insertdata');




