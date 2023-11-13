<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/select-2-list', [UserController::class, 'select2list'])->name('users.select_2_list');
        Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
    });
    Route::group(['prefix'=>'posts'], function(){
        Route::get('/',[PostController::class,'index'])->name('posts.index');
        Route::get('/select-2-list',[PostController::class,'select2list'])->name('posts.select_2_list');
        Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
    });
});
