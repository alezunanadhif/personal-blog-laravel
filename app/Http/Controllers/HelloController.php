<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index()
    {
        echo "Index";
    }
    
    function welcome()
    {
        return view('welcome');
    }
    
    function create()
    {
        return view('create');
    }

    function world_message()
    {
        echo "World";
    }
}
