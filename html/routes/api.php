<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;

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

Route::get('/', [GoodsController::class, 'index']);

Route::get('/item/{id}', [GoodsController::class, 'item']);

Route::post('/saveComment', [GoodsController::class, 'saveComment']);

Route::get('/indexWithParams', [GoodsController::class, 'indexWithParams']);

