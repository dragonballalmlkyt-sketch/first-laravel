<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Route::get('/about', [IndexController::class, 'about']);

Route::get('/contact', [IndexController::class, 'contact']);

Route::get('/job', [JobController::class, 'index']);

Route::get("/blog", [BlogController::class, 'index']);

Route::get("/blog/create", [BlogController::class, 'create']);

Route::get("/blog/delete", [BlogController::class, 'delete']);

Route::get("/blog/{id}", [BlogController::class, 'show']);

Route::get("/comments", [CommentController::class, 'index']);

Route::get("/comments/create", [CommentController::class, 'create']);


Route::get("/comments/{id}", [CommentController::class, 'show']);

Route::get("/tags", [TagController::class, 'index']);

Route::get("/tags/create", [TagController::class, 'create']);

Route::get("/tags/test", [TagController::class, 'Post_tags']);

