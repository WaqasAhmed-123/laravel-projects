<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    
    public function index()
    {
        return view('index');
    }

    
    public function page1()
    {
        return view('page1', ['name' => 'Waqas Ahmed']);
    }


    public function page2($name = "")
    {
        return view('page2', ['name' => $name]);
    }
}