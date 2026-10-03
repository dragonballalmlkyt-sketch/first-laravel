<?php

use App\Http\Controllers\jobcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return "heloo form new laravel";
});

Route::get('/job', [jobcontroller::class, 'index']);

