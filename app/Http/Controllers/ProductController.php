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

        $products = [
            [
                "image" => asset('images/snoopy.jpg')
            ],
            [
                "image" => asset('images/lucy.jpg')

            ]
        ];

        $product= $products[0];

        var_dump($product);

        return view('product.show', [
            "product" => $product
    ]);
    }
}
