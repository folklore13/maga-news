<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/detail', function () {
    return view('user.detail');
});