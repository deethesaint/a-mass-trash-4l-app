<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function() {
    return view('test.test');
});

Route::get('/basic-layout', function() {
    return view('test.basic');
});

Route::get('/', function() {
    return view('test.blog');
});