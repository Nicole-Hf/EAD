<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ChildrenController;
use App\Http\Controllers\API\EvaluacionController;
use App\Http\Controllers\API\PreguntaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/children', [ChildrenController::class, 'getChildren']);
    Route::get('/children/{id}', [ChildrenController::class, 'getKid']);
    Route::post('/evaluacion', [EvaluacionController::class, 'createTest']);
    Route::get('/evaluacion/{kid}', [EvaluacionController::class, 'getTests']);
    //Route::get('/evaluacion/{test}', [EvaluacionController::class, 'getTest']);
    Route::get('/evaluacion/{evaluacion}/{area}', [EvaluacionController::class, 'getResultadoArea']);
    Route::get('/items/{area}/{evaluacion}', [PreguntaController::class, 'getItem']);
    Route::get('/nextitems/{resultado}/{area}', [PreguntaController::class, 'getNextItem']);
    Route::post('/resultado/{evaluacion}/{pregunta}', [PreguntaController::class, 'saveResultado']);
    Route::get('/resultado/{evaluacion}', [EvaluacionController::class, 'getResultTotal']);
    //Route::get('/prueba/{resultado}/{area}', [PreguntaController::class, 'primerResultadoxArea']);
});
