<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninez', function () {
    return view('ninhez');
});

Route::get('/adolescencia', function () {
    return view('adolescencia');
});

Route::get('/adultez', function () {
    return view('adultez');
});