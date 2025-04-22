<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    
    public function sendEmail()
    {
        return view('sendEmail');
    }

    public function postSendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'email' => 'required|max:355',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->with('error', 'Somethings wrong.');   
        }
        
        return redirect()->back()->with('success', 'Email sent.');   
    }
}
