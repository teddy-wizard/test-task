<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', [UserController::class, 'getUsers']);
Route::get('/user/{id}', [UserController::class, 'getUser']);
Route::post('/user', [UserController::class, 'saveUser']);
Route::put('/user/{id}', [UserController::class, 'updateUser']);
Route::delete('/user/{id}', [UserController::class, 'deleteUser']);

Route::get('/albums/{user_id}', [AlbumController::class, 'getAlbums']);
Route::get('/album/{id}', [AlbumController::class, 'getAlbum']);
Route::post('/album/{user_id}', [AlbumController::class, 'saveAlbum']);
Route::put('/album/{id}', [AlbumController::class, 'updateAlbum']);
Route::delete('/album/{id}', [AlbumController::class, 'deleteAlbum']);
