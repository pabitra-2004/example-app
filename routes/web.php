<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('query', QueryController::class);


Route::get('customers', CustomerController::class);
Route::get('posts', PostController::class)->name('posts.index');