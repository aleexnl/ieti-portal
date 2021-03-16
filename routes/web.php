<?php

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

Route::get('/alumnes', function () {
    return view("users/index");
});

Route::get('dashboard', function () {
    if (Auth::user()->isAdmin()) {
        return redirect('admin/dashboard');
    } else {
        return view('userDashboard');
    }
})->middleware(['auth'])->name('dashboard');;

Route::name('admin')
    ->prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        require __DIR__ . '/admin.php';
    });

require __DIR__ . '/auth.php';
