<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(NinjaController::class)->group(function () {
    Route::get('/ninjas', 'index')->name('ninjas.index');
    Route::get('/ninjas/create', 'create')->name('ninjas.create');
    Route::get('/ninjas/{ninja}', 'show')->name('ninjas.show');
    Route::post('/ninjas', 'store')->name('ninjas.store');
    Route::delete('/ninjas/{ninja}', 'destroy')->name('ninjas.destroy');
});