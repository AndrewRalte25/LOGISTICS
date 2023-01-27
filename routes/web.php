<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\itemController;

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

Route::get('/',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[UserController::class,'login']);
Route::get('/register',[LoginController::class,'register']);
Route::post('/register',[UserController::class,'register']);
Route::get('/admin', [LoginController::class, 'admin']);

Route::get('/categories', [CategoriesController::class, 'index']);
Route::put('/categories', [CategoriesController::class, 'update']);
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);
Route::Post('/cateadd', [CategoriesController::class, 'store']);
Route::get('/cateadd', [CategoriesController::class, 'create']);

Route::get('/items', [itemController::class, 'index']);
Route::put('/items', [itemController::class, 'update']);
Route::delete('/items/{id}', [itemController::class, 'destroy']);
Route::Post('/itemadd', [itemController::class, 'store']);
Route::get('/itemadd', [itemController::class, 'create']);