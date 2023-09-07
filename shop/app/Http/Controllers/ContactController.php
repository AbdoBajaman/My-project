<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ContactController extends Controller
{
     function index()
     {
        return view('contact');
     }
}
