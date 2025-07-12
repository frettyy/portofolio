<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('service');
});
Route::get('/resume', function () {
    return view('resume');
});