<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\VowelController;

Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/{id}', [CharacterController::class, 'show']);

Route::get('/vowels', [VowelController::class, 'index']);
Route::get('/vowels/{id}', [VowelController::class, 'show']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
