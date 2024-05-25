<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb(Request $request)
    {
        $level = 32;
        $version = $request->input('version');
    
        return view('pb', [
            'ver' => $version,
            'level' => $level
        ]);
    }
}
