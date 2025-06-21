<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/obat/create', [ObatanController::class, 'create'])->name('obat.create');;
Route::post('/obat',[ObatanController::class, 'store'])->name('obat.store');
Route::get('/obat/{id}/edit',[ObatanController::class, 'edit'])->name('obat.edit');
Route::put('/obat/{id}',[ObatanController::class, 'update'])->name('obat.update');
Route::delete('/obat/{id}',[ObatanController::class, 'destroy'])->name('obat.destroy');
Route::get('/obat', [ObatanController::class, 'index']);


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');;
Route::post('/register',[AuthController::class, 'register']);
Route::get('/login',[AuthController::class, 'ShowLoginForm'])->name('login');
Route::post('/login',[AuthController::class, 'login']);
Route::get('/dashboard',[AuthController::class, 'dashboard'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/User/index', [ObatanController::class, 'userIndex'])->name('user.index')->middleware('auth');
