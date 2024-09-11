<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.home.blade');
});
Route::get('/itempage', function () {
    return view('Pages.items.blade');
});
Route::get('/picturepage', function () {
    return view('Pages.pictures.blade');
});
