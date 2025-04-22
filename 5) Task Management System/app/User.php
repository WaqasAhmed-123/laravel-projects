<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //can add custome varibles in this array on the basis of your DB table
    protected $fillable = [
        'name', 'contact', 'email', 'password', 'role', 'is_active', 'created_at', 'updated_at'
    ];

    
    protected $hidden = [
        'password', 
    ];

    //this function is used to neglect built in rember feature validation function
    //if you dont need remember me feature then, paste the following code in project User Model
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
          parent::setAttribute($key, $value);
        }
    }

}
