<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\productController as ProductController;
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



Route::get('/signup',[Controller::class,'showRegister']);
Route::post('/register',[Controller::class,'register']);

Route::get('/signin',[Controller::class,'showLogin'])->name('login');
Route::post('/login',[Controller::class,'login']);

Route::middleware('auth')->group(function(){
    Route::get('/create',[ProductController::class,'index']);
    Route::post('/create-product',[ProductController::class,'create']);
    Route::get('/stocks',[ProductController::class,'stock']);
    Route::get('/stock-in/{id}',[ProductController::class,'showStockIn']);
    Route::post('/stockin-product',[ProductController::class,'stockin']);
    Route::get('/read',[ProductController::class,'products']);
    Route::get('/', function () {
    return view('welcome');
});
});
Route::post('/logout',[Controller::class,'logout']);