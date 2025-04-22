<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    

    use AuthenticatesUsers;

    
    //protected $redirectTo = '/home';

    //overriding the system to redirect on the basis or role
    //also need to make some changes in app/Http/Middleware/RedirectIfAuthenticated.php
    protected function redirectTo()
    {
        $role = Auth::user()->role; 

        if($role == 1)
        {
            return '/adminIndex';
        }
        else
        {
            return '/userIndex';
        }

    }
    
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
