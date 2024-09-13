<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {


Route::get('/', function () {
    return view('admin');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('category', CategoryController::class);

});
    