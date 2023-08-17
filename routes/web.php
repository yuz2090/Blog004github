<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function() { return view('Welcome'); });

Route::get('/login' , [AuthController::class, 'showlogin']);

Route::post('/login' , [AuthController::class, 'checkLogin']);

Route::get('/logout' , [AuthController::class, 'Logout']);

Route::middleware(['auth.admin'])->group(function ()    {

    Route::get('/content', [ContentController::class, 'index']);

    Route::get('/content/create', [ContentController::class, 'create']);

    Route::get('/content/{id}/edit', [ContentController::class, 'edit']);

    Route::post('/content', [ContentController::class, 'store']);

    Route::put('/content/{id}', [ContentController::class, 'update']);

    Route::delete('/content/{id}', [ContentController::class, 'destroy']);

});

