<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // function show(Request $request)
    // {

    //     $id = $request->input('id');

    //     $products = [
    //         [
    //             "image" => asset('images/snoopy.jpg')
    //         ],
    //         [
    //             "image" => asset('images/lucy.jpg')
    //         ]
    //     ];

    //     $product= $products[$id];

    //     var_dump($product);

    //     return view('product.show', [
    //         "product" => $product
    // ]);
    // }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        DB::table('products')->insert([
            'name' => 'Product 1',
            'price' => 100
        ]);

        return redirect()->route('products.index');
    }
}
