<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ondi', function() {
    return view('selamatmencoba');
});
Route::get('/latihan', function() {
    return view('latihan');
});

Route::get('/latihan', function() {
    return view('latihan');
});

