<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
})->name('admin.home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
