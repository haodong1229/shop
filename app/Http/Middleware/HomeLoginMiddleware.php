<?php

namespace App\Http\Middleware;

use Closure;

class HomeLoginMiddleware
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
        //检测是否有登录手机号,没有则到登录界面
        if ($request->session()->has('phone')) {

            return $next($request);
        }else{
            return redirect('/login_in');
        }
    }
}
