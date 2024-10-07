<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route pour l'inscription
Route::post('/register', [AuthController::class, 'register']);

// Route pour la connexion
Route::post('/login', [AuthController::class, 'login']);
use App\Http\Controllers\ArticleController;

Route::apiResource('articles', ArticleController::class);

