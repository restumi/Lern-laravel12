<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
require_once '../app/Http/Controllers/NavController.php';

Route::get('/', function(){
    return view('welcome');
});

// Nav Controller
Route::get('/home', [NavController::class, 'home']);
Route::get('/about', [NavController::class, 'about']);
Route::get('/blog', [NavController::class, 'blog']);
Route::get('/contact', [NavController::class, 'contact']);

Route::get('/blog/{id}', function($id) {

    $posts = NavController::all();

    $post = Arr::first($posts, function($post) use($id){
        return $post['id'] == $id;
    });

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});