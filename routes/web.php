<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})-> name('welcome');

Route::get('/service', function () {
    return view('service');
})-> name('service');