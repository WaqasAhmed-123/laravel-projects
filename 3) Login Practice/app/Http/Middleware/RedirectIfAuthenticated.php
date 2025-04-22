<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Controller;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) 
        {
            //return redirect('/home');

            //redirection on the basis of role
            //after making these changes, we need to make Role.php class in app/Http/Middleware/Kernel.php file
            $role = Auth::user()->role; 

            switch ($role) 
            {
              case '1':
                 return redirect('/adminIndex');
                 break;
              case '2':
                 return redirect('/userIndex');
                 break; 

              default:
                 return redirect('/notFound'); 
                 break;
            }
        }

        return $next($request);
    }
}
