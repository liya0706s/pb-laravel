<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show()
    {
        // order => 訂單
        // product => 商品
        // prefix => 前綴
        return view('product.show');
    }
}
