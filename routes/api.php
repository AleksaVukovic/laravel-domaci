<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies/{id}', [MovieController::class,'show']);
Route::get('directors/{id}', [DirectorController::class,'show']);
Route::get('cinemas/{id}', [CinemaController::class,'show']);
Route::get('movies', [MovieController::class,'index']);
Route::get('directors', [DirectorController::class,'index']);
Route::get('cinemas', [CinemaController::class,'index']);
Route::delete('movies/destroy/{movie_id}', [MovieController::class,'destroy']);
Route::delete('directors/destroy/{director_id}', [DirectorController::class,'destroy']);
Route::delete('cinemas/destroy/{cinema_id}', [CinemaController::class,'destroy']);
Route::post("cinema/add",[CinemaController::class,"add"]);
Route::post("director/add",[DirectorController::class,"add"]);
Route::post("movie/add",[MovieController::class,"add"]);




