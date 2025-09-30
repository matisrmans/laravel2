<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;


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


Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', function () {
    return view('posts.create');
});