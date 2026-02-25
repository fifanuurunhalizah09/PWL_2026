<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;


Route::get('/greeting', function () {
	return view('hello', ['name' => 'Aliza']);
});
