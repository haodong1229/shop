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
        // $request 请求报文
        //检测用户是否具有登录的session
        if($request->session()->has('id')){
            //4.用访问模块的控制器和方法权限列表做对比
            //获取访问控制器的方法
            $actions=explode('\\', \Route::current()->getActionName());
            //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);
            //控制器名字
            $controller=$func[0];
            $actionName=$func[1];

            // $action=$request->route()->getActionMethod();
            // echo $controller.":".$action;die;
            //对比
            $nodelist = session('nodelist');

            //登录用户权限的打印
            // var_dump($nodelist);die;

            //关闭权限,可以浏览任意模块
            
            // if (empty($nodelist[$controller]) || !in_array($actionName,$nodelist[$controller])) {
            //     return redirect('/index')->with('error','抱歉,您没有权限访问该模块,请联系超级管理员');
            // }

            return $next($request);
        }else{
            //跳转到登录界面
            return redirect("/login");
        }
        
    }
}
