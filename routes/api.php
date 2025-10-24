<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// Author Routes
Route::apiResource('authors', AuthorController::class);

// Book Routes
Route::apiResource('books', BookController::class);
