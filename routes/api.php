<?php

use App\Http\Controllers\api\v1\PostApiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


// REST API, HTTP Standards, and JSON responses
// Using GET, POST, DELETE methods for different operations
// getting responses 200, 201, 204, and 404 for different scenarios

Route::prefix("v1")->group(function () {
    Route::apiResource('post', PostApiController::class);


    Route::post("/comments", [CommentController::class, 'create']);


    Route::post("/tags", [TagController::class, 'create']);
});