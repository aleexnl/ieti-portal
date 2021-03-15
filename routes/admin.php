<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\TermController;
use App\Http\Controllers\TermCourseController;
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
Route::resource('cursos', TermController::class)->names([
    'index' => 'cursos'
]);
Route::resource('alumnes', UserController::class)->names([
    'index' => 'alumnes'
]);
Route::resource('cursos.cicles', TermCourseController::class);
