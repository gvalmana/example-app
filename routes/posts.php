<?php

use App\Http\Controllers\PostListController;
use App\Http\Controllers\PostDeleteController;
use App\Http\Controllers\PostCreateOrUpdateController;

Route::prefix('posts')->group(function () {
    Route::get('/', [PostListController::class, 'index'])->name('posts.index');
    Route::get('/select-2-list', [PostListController::class, 'select2list'])->name('posts.select_2_list');
    Route::get('/{id}', [PostListController::class, 'show'])->name('posts.show');
    Route::delete('/delete-by-ids', [PostDeleteController::class, 'destroyByIds'])->name('posts.destroy-by-ids');
    Route::delete('/{id}', [PostDeleteController::class, 'destroy'])->name('posts.destroy');
    Route::patch('{id}/restore', [PostDeleteController::class, 'restore'])->name('posts.restore');
    Route::patch('/restore-by-ids', [PostDeleteController::class, 'restoreByIds'])->name('posts.restore-by-ids');
    Route::post('/',[PostCreateOrUpdateController::class,'store'])->name('posts.store');
    Route::post('/{id}',[PostCreateOrUpdateController::class, 'update'])->name('posts.update');
});

