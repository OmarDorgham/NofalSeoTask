<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('home');
        Route::get('/create', [PostController::class, 'create'])->name('create-post');
        Route::post('/', [PostController::class, 'store'])->name('store-post');
        Route::get('/{post}', [PostController::class, 'show'])->name('show-post');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit-post');
        Route::put('/{post}/update', [PostController::class, 'update'])->name('update-post');
        Route::delete('/{post}/delete', [PostController::class, 'destroy'])->name('delete-post');
    });

    Route::prefix('comments')->group(function () {
        Route::post('{post}/store', [CommentController::class, 'store'])->name('store-comment');
    });
});
