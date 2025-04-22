<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/sendEmail', 'HomeController@sendEmail')->name('sendEmail');
Route::post('/postSendEmail', 'HomeController@postSendEmail');

Route::get('send-mail', function () 
{
   
    $details = [
        'title' => 'Test Mail',
        'body' => 'This is for testing email using smtp Laravel'
    ];
   
    \Mail::to('waqaxahmed786@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});