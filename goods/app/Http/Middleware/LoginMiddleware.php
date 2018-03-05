<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        // 判断session当中是否有session信息
        if($request->session()->has('id')){
            return $next($request);
        }else{
            return redirect()->route('/login');
        }
    }
}
