<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    
    Route::get('/product/index',[ProductController::class,'index'])->name('products.index');
    Route::get('/product/create/',[ProductController::class,'create'])->name('products.create');
    Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->name('products.destroy');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('products.update');
    Route::get('/product/show/{id}',[ProductController::class,'show'])->name('products.show');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

        Route::get('index',[ProductController::class,'index'])->name('admin.product.index');
        Route::get('create',[ProductController::class,'create'])->name('admin.product.create');
        Route::get('delete/{id}',[ProductController::class,'delete'])->name('admin.product.delete');
        Route::get('edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
        Route::post('update/{id}',[ProductController::class,'edit'])->name('admin.product.update');
        Route::get('show{id}',[ProductController::class,'show'])->name('admin.product.show');
        Route::post('store',[ProductController::class,'store'])->name('admin.product.store');
        
});
Route::prefix('user')->group(function(){

        Route::get('signup',[RegisterController::class,'getSignup'])->name('admin.product.getsignup');
        Route::post('signup',[RegisterController::class,'postSignup'])->name('admin.product.postsignup');
        Route::get('login',[LoginController::class,'getLogin'])->name('admin.product.getlogin');
        Route::post('login',[LoginController::class,'postLogin'])->name('admin.product.postlogin');
});
Route::group(['middleware' => ['auth']],function(){
    Route::get('logout',[LogoutController::class,'Logout']);
});
