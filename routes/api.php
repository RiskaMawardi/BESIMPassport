<?php

use App\Http\Controllers\API\AuthController;
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
Route::get('/register',[AuthController::class,'index']);
Route::post('/register-account',[AuthController::class,'register'])->name('regusterAccount');
Route::post('/login',[AuthController::class,'loginAccount']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->controller(AuthController::class)->group(function(){
    Route::get('/logout','logout');
});