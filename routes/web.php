<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {

    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('/blog', function () {

    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// halaman single dua
Route::get('posts/{slug}', [PostController::class, 'show']);


