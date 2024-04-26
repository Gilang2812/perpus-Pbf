<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class,'create']);
Route::post('/buku/create', [BukuController::class,'insert']); // tambahkan route input buku

Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('editBuku'); // tambahkan route edit buku
Route::put('/buku/{id}/update', [BukuController::class, 'update']); // tambahkan route update buku
