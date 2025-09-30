<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);

Route::post('/store', [PostController::class, 'store']);

Route::get('/posts/create', function () {
    return view('posts.create');
});

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::delete('/posts/delete/{id}', [PostController::class, 'delete']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/static-form', function () {
    return view('static_form');
});

Route::post('/submit-static-form', function (Request $request){
    \Log::debug($request);
    return "Form data: " . $request['name'];
});

