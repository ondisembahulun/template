<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/ondi', function() {
//     return view('selamatmencoba');
// });
// Route::get('/latihan', function() {
//     return view('latihan');
// });

Route::get('/dash', function() {
    return view('admin/dashboard');
})->name('dashboard');
Route::get('/part1', function() {
    return view('admin/part1');
})->name('part1');
Route::get('/part2', function() {
    return view('admin/part2');
})->name('part2');

