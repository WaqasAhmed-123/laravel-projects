<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    
    use RegistersUsers;

    
    protected $redirectTo = '/';

    
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed',
        ]);
    }

    
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'contact' => $data['contact'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 2,
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
