<?php

use App\Http\Controllers\TermController;
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
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->isAdmin()) {
            return "Eres un usuario administrador";
        } else {
            return "Eres un usuario no administrador";
        }
    } else {
        return view('welcome');
    }
});

Route::get('/sample-page', function () {
    return view('sample');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('terms', TermController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
