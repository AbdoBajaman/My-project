<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    function index()
    {
        return view('thanks');
    }
}
