<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('About');
});
Route::get('/', function () {
    return view('Service');
});
Route::get('/resume', function () {
    return view('Resume');
});
Route::get('/project-detail', function () {
    return view('project-detail');
})->name('project.show');