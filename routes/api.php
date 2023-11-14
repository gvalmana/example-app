<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCreateOrUpdateController;
use App\Http\Controllers\PostDeleteController;
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
    // Incluir archivo de rutas de usuarios
    include 'users.php';

    // Incluir archivo de rutas de publicaciones (posts)
    include 'posts.php';
});
