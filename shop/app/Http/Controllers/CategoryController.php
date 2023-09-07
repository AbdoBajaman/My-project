<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // function index(category $category)
    // {

          
    //    $data= category::find($category)->product;

    //     return view('products',['data'=>$data]);
    // }


    function index()
    {

          
       $data= category::all();

        return view('category',['data'=>$data]);
    }
}


