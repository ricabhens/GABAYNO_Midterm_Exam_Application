<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data=array(
            "Title"=>"When you were sleeping",
            "Genre"=>"Romance",
            "Country"=>"Korea"
        );
        return view('Movies', ['data'=>$data]);
    }
}
