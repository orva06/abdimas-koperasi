<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function (Request $request) {
    return 'test';
});

Route::resource('koperasi', UserController::class);
Route::get('/list', [UserController::class, "users"]);

use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');