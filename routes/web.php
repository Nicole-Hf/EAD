<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfanteController;
use App\Http\Controllers\UserController;

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



Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('usuarios', UserController::class);
    Route::resource('infantes', InfanteController::class);
    Route::post('change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
});