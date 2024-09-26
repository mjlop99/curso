<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/estudiante', function () {
    return view('estudiante');
});
Route::get('/profesor', function () {
    return view('profesor');
});
Route::get('/director', function () {
    return view('director');
});
