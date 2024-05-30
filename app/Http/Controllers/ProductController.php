<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
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

        $diskName= "public";
        $name=$request->file('product_image')->getClientOriginalName();
        $path=$request->file('product_image')->storeAs(
            'products',
            $name,
            $diskName
        );
        $url=Storage::disk($diskName)->url($path);

        DB::table('products')->insert([
            'name' => $request->input('product_name'),
            'price' => $request->input('product_price'),
            'image_url' => $url
        ]);

        return redirect()->route('products.index');
    }
}
