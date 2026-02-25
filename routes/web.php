<?php

use Illuminate\Support\Facades\Route;

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});