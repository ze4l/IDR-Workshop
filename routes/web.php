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

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/listBarang', [ListBarangController::class, 'index']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/montir',[MontirController::class, 'index'])->name('montir');

Route::get('/tambahmontir',[MontirController::class, 'tambahmontir'])->name('tambahmontir');
Route::post('/insertdata', [MontirController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[MontirController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata', [MontirController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[MontirController::class, 'delete'])->name('delete');



