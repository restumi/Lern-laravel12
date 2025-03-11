<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use Illuminate\Support\Collection;


Route::get('/', function(){
    return view('welcome');
});

// Nav Controller
Route::get('/home', [NavController::class, 'home']);
Route::get('/about', [NavController::class, 'about']);
Route::get('/blog', [NavController::class, 'blog']);
Route::get('/contact', [NavController::class, 'contact']);
Route::get('/blog/{id}', [NavController::class, 'SinglePost']);