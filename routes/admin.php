<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\TermController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('dashboard', function () {
    return view('adminDashboard');
})->name('dashboard');
Route::resource('cursos', TermController::class)->middleware(['auth', 'isAdmin'])->names([
    'index' => 'cursos'
]);
Route::resource('alumnes', UserController::class)->middleware(['auth', 'isAdmin'])->names([
    'index' => 'alumnes'
]);
