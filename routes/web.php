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



Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'isAdmin'])->name('dashboard');


Route::resource('cursos', TermController::class)->middleware(['auth']);

Route::name('admin')
    ->prefix('admin')
    ->middleware(['auth', 'can:accessdmin'])
    ->group(function () {
        Route::get('/admin/dashboard', 'Adminpanel\Dashboard@index');

        Route::resource('posts', 'PostController');
        Route::resource('users', 'UserController');
    });
require __DIR__ . '/auth.php';
