<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb()
    {
        $level = 32;
        $version = $_GET['version'];
    
        return view('pb', [
            'ver' => $version,
            'level' => $level
        ]);
    }
}
