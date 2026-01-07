<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('query', QueryController::class);


Route::get('customers', CustomerController::class);
Route::get('posts', PostController::class)->name('posts.index');
Route::get('users', UserDetailController::class);
Route::get('roles', RoleController::class);
