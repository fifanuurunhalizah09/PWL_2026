<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentId){
    return 'Pos ke-' .$postID." Komentar ke-: ".$commentId;
});