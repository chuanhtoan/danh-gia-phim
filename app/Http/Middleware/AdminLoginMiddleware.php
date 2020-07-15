<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('admin')->check()){
            $user = Auth::guard('admin')->user();
            if($user->loai == 'admin')
              return $next($request);
            else
              return \redirect('/admin/login');
          }          
          else 
            return \redirect('/admin/login');
    }
}
