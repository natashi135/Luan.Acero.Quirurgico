<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/panel', function () {
    return view('panel');
})->name('panel');

Route::get('/admin', function () {
    return redirect()->route('panel');
});
