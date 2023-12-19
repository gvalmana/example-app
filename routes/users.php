<?php

use App\Http\Controllers\UserListController;

Route::prefix('users')->group(function () {
    Route::get('/', [UserListController::class, 'index'])->name('users.index');
    Route::post('/', [UserListController::class, 'index'])->name('users.store');
    Route::get('/select-2-list', [UserListController::class, 'select2list'])->name('users.select_2_list');
    Route::get('/{id}', [UserListController::class, 'show'])->name('users.show');
});

