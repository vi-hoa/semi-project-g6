<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});
Route::group(['prefix' =>'category'], function(){
    Route::get('/',[CategoryController::class,'index'])->name('admin.category');
    Route::get('create/',[CategoryController::class,'getCreate'])->name('admin.category.create');
    Route::post('create/',[CategoryController::class,'postCreate']);
    Route::get('edit/{id}',[CategoryController::class,'getEditCate']);
    Route::post('edit/{id}',[CategoryController::class,'postEditCate']);
    Route::get('delete/{id}',[CategoryController::class,'delete']);
    
    });

    Route::group(['prefix' =>'category'], function(){
        Route::get('/',[CategoryController::class,'index'])->name('admin.category.index');
        Route::get('create/',[CategoryController::class,'getCreate'])->name('admin.category.create');
        Route::post('create/',[CategoryController::class,'postCreate']);
        Route::get('edit/{id}',[CategoryController::class,'getEditCate']);
        Route::post('edit/{id}',[CategoryController::class,'postEditCate']);
        Route::get('delete/{id}',[CategoryController::class,'delete']);
    });
    Route::group(['prefix' =>'user'], function(){
        Route::get('/',[UsersController::class,'index'])->name('admin.user.index');
        Route::get('create/',[UsersController::class,'getCreate'])->name('admin.user.create');
        Route::post('create/',[UsersController::class,'postCreate']);
        Route::get('edit/{id}',[UsersController::class,'getEditCate']);
        Route::post('edit/{id}',[UsersController::class,'postEditCate']);
        Route::get('delete/{id}',[UsersController::class,'delete']);
    });