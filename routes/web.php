<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
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
    return view('auth.login');
});

Route::get('/usuarios', function () {
    return view('usuarios.index');
});

Route::resource('usuarios',usuarioController::class)->middleware('auth');
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [usuarioController::class, 'index'])->name('home');

Route::Group(['middleware' => 'auth'], function () {
    Route::get('/', [usuarioController::class, 'index'])->name('home');
});
