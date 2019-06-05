<?php

namespace easywebtour\Http\Middleware;

use Closure;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard=null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }

    public function checklogin(Request $request)
    {
            
        $this->validate($request, [
          'login'   => 'required',
          'password'    => 'required|alphaNum|min:3'
        ]);

        
        $user_data = array(
          'login'  => $request->get('login'),
          'password' => $request->get('pass')
        );

        
    }
}
