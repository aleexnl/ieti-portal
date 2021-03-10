<?php

use App\Http\Controllers\TermController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/sample-page', function () {
    return view('sample');
});

Route::get('dashboard', function () {
    if (Auth::user()->isAdmin()) {
        return view('adminDashboard');
    } else {
        return view('userDashboard');
    }
})->middleware(['auth'])->name('dashboard');;


Route::get("forbidden", function () {
    return view('403error');
});
/*
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'isAdmin'])->name('dashboard');

    */
Route::resource('cursos', TermController::class)->middleware(['auth', 'isAdmin'])->names([
    'index' => 'cursos'
]);
Route::resource('alumnes', UserController::class)->middleware(['auth', 'isAdmin'])->names([
    'index' => 'alumnes'
]);

require __DIR__ . '/auth.php';
