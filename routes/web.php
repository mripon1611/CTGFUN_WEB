<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowAllController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentDetailsController;
use App\Http\Controllers\MyFavoriteController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('show-all/{cat_type}', [ShowAllController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::get('logout', [LoginController::class, 'logout']);
Route::post('check-login', [LoginController::class, 'checkLogin']);
Route::get('content-details/{content_id}', [ContentDetailsController::class, 'index']);

Route::get('my-favorite', [MyFavoriteController::class, 'index']);
Route::post('addOrRemoveFav', [MyFavoriteController::class, 'addOrRemoveFav']);
