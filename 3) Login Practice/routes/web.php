<?php
use App\Http\Controllers\Controller;


Route::get('/', function () 
{
    if(Auth::guest())
    {
        return view('auth.login');
    }
    else
    {
        if(Auth::user()->role == 1)
        {
            return redirect('adminIndex');
        }
        else
        {
            return redirect('userIndex');
        }
    }
});



Auth::routes();


Route::get('/forgotPassword', 'AuthController@forgotPassword')->name('forgotPassword');
Route::post('/postForgotPassword', 'AuthController@postForgotPassword');

//this route group is for both admin, user
Route::middleware('auth')->group(function () 
{
    Route::get('/updateProfile', 'AuthController@updateProfile')->name('updateProfile');
    Route::post('/postUpdateProfile', 'AuthController@postUpdateProfile');

    Route::get('/updatePassword', 'AuthController@updatePassword')->name('updatePassword');
    Route::post('/postUpdatePassword', 'AuthController@postUpdatePassword');
});


//this route group is for only admin
Route::middleware(['auth', 'role:1'])->group(function () 
{
    Route::get('/adminIndex', 'AdminController@index')->name('adminIndex');
});



//this route group is for only users
Route::middleware(['auth', 'role:2'])->group(function () 
{
    Route::get('/userIndex', 'UserController@index')->name('userIndex');
});


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/adminIndex', 'AdminController@index')->name('adminIndex')->middleware('role:1');
//Route::get('/userIndex', 'UserController@index')->name('userIndex')->middleware('role:2');


Route::get('/notFound', 'ErrorController@errorPage')->name('notFound');