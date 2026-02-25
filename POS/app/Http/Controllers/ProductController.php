<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function food(){ return view('product.food'); }
    public function beauty(){ return view('product.beauty'); }
    public function homecare(){ return view('product.homecare'); }
    public function baby(){ return view('product.baby'); }
}
