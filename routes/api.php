<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PermohonanController;
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

//auth
Route::get('/register',[AuthController::class,'index']);
Route::post('/register-account',[AuthController::class,'register'])->name('regusterAccount');
Route::post('/login',[AuthController::class,'loginAccount']);

//user-upload
Route::post('/permohonan-upload',[PermohonanController::class,'create']);

//getData
Route::get('/get-data',[AdminController::class,'getData']);
Route::get('/get-data-detail/{nik}',[AdminController::class,'getDataDetail']);

//getdatauser
Route::get('/getDt',[PermohonanController::class,'getData']);

//insert
Route::post('/insert',[AdminController::class,'insert']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->controller(AuthController::class)->group(function(){
    Route::get('/logout','logout');
});