<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{aliza}', function ($name) {
    return 'Nama saya '.$name;
});
