<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\MovieController;
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

Route::controller(LoginController::class)->group(function(){
    Route::post('login', 'login');
});

Route::controller(LoginController::class)->group(function(){
    Route::post('register', 'register');
});

Route::resource("animal", AnimalController::class);
Route::resource("movie", MovieController::class);
Route::resource("music", MusicController::class);
Route::resource("country", CountryController::class);
Route::resource("student", StudentController::class);
