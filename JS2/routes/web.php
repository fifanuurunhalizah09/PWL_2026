<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

//praktikum 1
//2
Route::get('/hello', function () {
    return 'Hello World';
});
//4
Route::get('/world',function () {
    return 'World';
});
//6
Route::get('/selamat', function () {
    return 'Selamat Datang';
});
//7
Route::get('about', function () {
    return 'Nama: Fifa Nuurun Halizah <br> NIM: 202410101086 <br> Kelas: PWL C
    NIM: 2441070720019';
});
//8
Route::get('/user/{aliza}', function ($name) {
    return 'Nama saya ' . $name;
});
//11
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke-: ' . $postId . 'Komentar ke-: ' . $commentId;
});
//13
Route::get('/article/{id}', function ($id) {
    return 'Halaman Artikel dengan ID: ' . $id;
});
//14
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});
//17
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

//Praktikum 2
//4
Route::get('/hello', [WelcomeController::class, 'hello']);
//6
Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/article/{id}', [PageController::class, 'article']);

Route::resource('photos', PhotoController::class); 
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
//Praktikum 3
//1
Route::get('/greeting', function() {
    return view('greeting', ['name' => 'Aliza']);
});
//6
Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Aliza']); 
});
Route::get('/greeting', [WelcomeController::class, 'greeting']);
