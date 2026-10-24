
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\AuthController;

// Routes des livres et des auteurs
Route::resource('/Livres', LivreController::class);
Route::resource('/auteurs', AuteurController::class);

// Routes d'authentification
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
