<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function article ($id){
        return 'Halaman Artikel dengan ID: '.$id;
    }
}
