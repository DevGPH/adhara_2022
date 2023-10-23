<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\SantanderTestController;
use App\Http\Controllers\API\SantanderApiController;

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

Route::get('/santander-reserve/{folio}',[SantanderApiController::class,'index']);
Route::get('/santander-keys',[SantanderTestController::class,'keys']);
Route::post('/santander-test-response',[SantanderTestController::class,'testResponse']);
