<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\KkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/data-account',[AccountController::class,'data']);
Route::post('/registers',[AccountController::class,'register']);


Route::get('/kk',[KkController::class,'index']);
Route::post('/kk-create',[KkController::class,'store']);