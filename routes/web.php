<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::view('/contact','contact');
Route::view('/about', 'about');
Route::view('/login', 'login');
