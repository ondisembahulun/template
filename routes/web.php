<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ondi', function() {
//     return view('selamatmencoba');
// });
// Route::get('/latihan', function() {
//     return view('latihan');
// });

// ondi


//dading



Route::get('/dashboard', function() {
    return view('admin/dashboard');
})->name('dashboard');

Route::get('/dading', function() {
    return view('admin/part1');
})->name('part1');
Route::get('/dading/create', function() {
    return view('admin/dading/create');
})->name('create');
Route::get('/dading/edit', function() {
    return view('admin/dading/edit');
})->name('edit');
Route::get('/Ikhwan', function() {
    return view('admin/part2');
})->name('part2');
Route::get('/Ondi', function() {
    return view('admin/part3');
})->name('part3');
Route::get('/Taher', function() {
    return view('admin/part4');
})->name('part4');
