<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('livro', [PostController::class, 'livro']);

Route::get('livro', [PostController::class, 'index']);
Route::post('livro', [PostController::class, 'store']);
Route::put('livro', [PostController::class, 'update']);
Route::delete('livro', [PostController::class, 'destroy']);


