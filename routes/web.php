<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;

Route::get('/', function(){
    return view('welcome');
});

// Nav Controller
Route::get('/home', [NavController::class, 'home']);
Route::get('/about', [NavController::class, 'about']);
Route::get('/blog', [NavController::class, 'blog']);
Route::get('/contact', [NavController::class, 'contact']);

// Other Controller
Route::get('/instagram', function(){
    return redirect()->away('https://instagram.com');
});