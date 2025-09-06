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

Route::get('/sobremi', function () {
    return view('sobremi');
});

Route::get('/metas', function () {
    return view('metas');
});

Route::get('/experiencia', function () {
    return view('experiencia');
});