<?php

use App\Http\Controllers\ApiController;
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

//Route::post('/student','ApiController@create');
Route::post('/student', [ApiController::class, 'create']);
Route::get('/students',[ApiController::class, 'show']);
Route::get('/student/{id}', [ApiController::class, 'showbyid']);
Route::put('/studentupdate/{id}',[ApiController::class, 'updatebyid']);
Route::delete('/studentdelete/{id}', [ApiController::class, 'deletebyid']);
