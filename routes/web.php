<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('welcome');
Route::get('/docs', [DocsController::class, 'index'])->name('docs.index');
// Route::get('/docs/{version?}/{page}', [DocsController::class, 'show'])->name('docs.show');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
