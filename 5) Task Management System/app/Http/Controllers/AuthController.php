<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Redirect;
use App\User;
use App\GeneralPurpose;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AuthController extends Controller
{
    
    public function updateProfile()
    {
        return view('auth.updateProfile');
    }


    public function postUpdateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'email' => 'required|max:355|unique:users,email,'.Auth::user()->id,
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->with('error', GeneralPurpose::getErrorString($validator->errors()));   
        }

        $id = Auth::user()->id;
        $name = $request->input('name');
        $contact = $request->input('contact');
        $email = $request->input('email');


        $updateUser = User::where('id', $id)->update(['name' => $name, 'contact' => $contact, 'email' => $email, 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);


        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function updatePassword()
    {
        return view('auth.updatePassword');
    }

    public function postUpdatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'password' => 'required|string|min:3|confirmed',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->with('error', GeneralPurpose::getErrorString($validator->errors()));   
        }

        if(Hash::check($request->input('oldPassword'), Auth::user()->password))
        {
            $id = Auth::user()->id;
            $newPassword = bcrypt($request->input('password'));
            

            $updateUser = User::where('id', $id)->update(['password' => $newPassword]);


            return redirect()->back()->with('success', 'Password updated successfully.');
        }
        else
        {
            return redirect()->back()->with('error', 'Old password did not match.'); 
        }

    }



    public function forgotPassword()
    {
        return view('auth.forgotPassword');
    }

    public function postForgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'email' => 'required|max:355',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->with('error', GeneralPurpose::getErrorString($validator->errors()));   
        }

        $email = $request->input('email');

        $user = User::whereEmail($email)->whereIsActive(1)->first();
        if(is_null($user))
        {
            return redirect()->back()->with('error', 'Email does not belongs to our record.');   
        }
        else
        {
            return redirect('/')->with('success', 'Please check your inbox/spam.');   
        }

    }
}
