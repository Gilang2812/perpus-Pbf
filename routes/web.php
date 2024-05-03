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
Route::post('/buku/create', [BukuController::class,'insert']); 
Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
Route::put('/buku/{id}/update', [BukuController::class, 'update']); 
Route::get('/buku/{id}/delete', [BukuController::class, 'delete']); 
Route::delete('/buku/{id}   /{id}', [BukuController::class, 'delete'])->name('deleteBuku'); 
Route::get('/katalogBuku',[BukuController::class,'indexKatalog']);

Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('editBuku');
Route::put('/buku/{id}/update', [BukuController::class, 'update']); 
