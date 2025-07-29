<?php

use Illuminate\Support\Facades\Route;

Route::get('/HOME', function () {
    return view('welcome');
});
