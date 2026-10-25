<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('Livres', LivreController::class);
    Route::resource('auteurs', AuteurController::class);

    Route::post('/envoyer', [MailController::class, 'envoyer'])
        ->name('mail.envoyer');
});

require __DIR__.'/auth.php';
