<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserListController;
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
        Route::get('/', [UserListController::class, 'index'])->name('users.index');
        Route::get('/select-2-list', [UserListController::class, 'select2list'])->name('users.select_2_list');
        Route::get('/{id}', [UserListController::class, 'show'])->name('users.show');
    });
    Route::group(['prefix'=>'posts'], function(){
        Route::get('/',[PostListController::class,'index'])->name('posts.index');
        Route::get('/select-2-list',[PostListController::class,'select2list'])->name('posts.select_2_list');
        Route::get('/{id}', [PostListController::class, 'show'])->name('posts.show');
    });
});
