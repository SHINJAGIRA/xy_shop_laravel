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
    Route::get('/stock-out/{id}',[ProductController::class,'stockOut']);
    Route::post('/stockout-product',[ProductController::class,'stockOutIn']);
    Route::get('/stock-update/{id}',[ProductController::class,'showUpdateStockIn']);
    Route::put('/stock-update-product',[ProductController::class,'updateStockIn']);
    Route::delete('/stock-delete/{id}',[ProductController::class,'deleteStockIn']);
    Route::get('/stock-updateout/{id}',[ProductController::class,'showUpdateStockOut']);
    Route::put('/stock-updateout-product',[ProductController::class,'updateStockOut']);
    Route::delete('/stock-deleteout/{id}',[ProductController::class,'deleteStockOut']);
    Route::get('/', [ProductController::class,'home']);
    Route::get('/update-product/{id}',[ProductController::class,'showUpdateProduct']);
    Route::put('/edit-product/{id}',[ProductController::class,'updateProduct']);
    Route::delete('/delete-product/{id}',[ProductController::class,'deleteProduct']);
    });
Route::post('/logout',[Controller::class,'logout']);