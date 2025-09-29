<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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