<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

use App\Models\category;


class ProductController extends Controller
{
    function index($id)
    {
        $data=category::find($id)->product;

        return view('products',['data'=>$data]);
    }


    function show()
    {
        $data=product::all();

        return view('products',['data'=>$data]);
    }


   
}
