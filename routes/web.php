<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\PostController::class, 'user'])->name('user');
Route::get('/admin', [App\Http\Controllers\PostController::class, 'index'])->name('admin');


Route::post('/admin/addPost', [App\Http\Controllers\PostController::class, 'store']);

Route::get('/admin/{id}/edit', [App\Http\Controllers\PostController::class, 'edit']);

 Route::put('/admin/{id}', [App\Http\Controllers\PostController::class, 'update']);

Route::delete('/admin/{id}', [App\Http\Controllers\PostController::class, 'destroy']);



Route::get('/user/details/{id}', [App\Http\Controllers\PostController::class, 'details'])->name('details');

Route::get('/admin', [App\Http\Controllers\PostController::class, 'index'])->name('admin');



Route::post('/user/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comment');

Route::delete('/user/{id}', [App\Http\Controllers\CommentController::class, 'destroy']);

