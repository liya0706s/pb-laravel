<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(Request $request)
    {
        // order => 訂單
        // product => 商品
        // prefix => 前綴

        $id = $request->input('id');

        $products = [
            [
                "image" => asset('images/snoopy.jpg')
            ],
            [
                "image" => asset('images/lucy.jpg')
            ]
        ];

        $product= $products[$id];

        // var_dump($product);

        return view('product.show', [
            "product" => $product
    ]);
    }
}
