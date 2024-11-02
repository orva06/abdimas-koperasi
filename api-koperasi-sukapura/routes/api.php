<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function (Request $request) {
    return 'test';
});

Route::resource('koperasi', UserController::class);
Route::get('/list', [UserController::class, "users"]);
