<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

    //following middleware is checking authentications and role
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:1']);
    // }

    
    
    public function index()
    {
        return view('admin.index');
    }
}
