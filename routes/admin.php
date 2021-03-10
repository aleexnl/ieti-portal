<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\TermController;
use App\Http\Controllers\UserController;

Route::get('dashboard', function () {
    return view('adminDashboard');
})->name('dashboard');
Route::resource('cursos', TermController::class)->middleware(['auth', 'isAdmin'])->names([
    'index' => 'cursos'
]);
Route::resource('alumnes', UserController::class)->middleware(['auth', 'isAdmin'])->names([
    'index' => 'alumnes'
]);
