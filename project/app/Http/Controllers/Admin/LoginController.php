<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入数据库类
use DB;
//引入表单验证
use App\Http\Requests\UserLogin;
use App\Http\Requests\UserInsert;
//引入Hash验证
use Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //显示后台登录页面
        // session()->pull('');
        return view('Admin.Login.login');
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserLogin $request)
    {
        //判断用户登录账户密码
        // dd($request->all());
        //获取用户名字
        $user=$request->input('username');
        //获取用户密码
        $pw=$request->input('password');
        //通过用户名字找到密码
        $data=DB::table("admin_users")->where('username','=',''.$user)->first();
        // var_dump($data);die;
        //检测用户名 
        if ($data) {
            // 检测密码
            if (Hash::check($pw,$data->password)) {

                //把用户信息写入到session
                session(['id'=>$data->id]);
                session(['name'=>$data->username]);

                //1.获取后台登录用户的所有权限列表
                $list = DB::select("select n.name,n.cname,n.aname from admin_users as au, user_role as ur,role as r,role_node as r_n,node as n where au.id = ur.uid and r.id = ur.rid and r_n.rid = r.id and r_n.nid = n.id and ur.uid = {$data->id}");
                // var_dump($list);die;
                //2.初始化权限信息
                //把后台首页权限写入到权限信息列表里
                $nodelist['AdminController'][] = 'index';
                // var_dump($nodelist);die;
                //遍历
                foreach($list as $v){
                    $nodelist[$v->cname][] = $v->aname;
                    // var_dump($nodelist);
                    //如果有create 添加store方法
                    if ($v->aname == "create") {
                        $nodelist[$v->cname][]="store";
                    }
                    //如果有edit方法
                    if ($v->aname == 'edit') {
                        $nodelist[$v->cname][] = "update";
                    }
                }
                //登录之前的权限信息打印
                // var_dump($nodelist);die;

                //登录用户春存储在session里
                session(['nodelist'=>$nodelist]);

                return redirect('/index')->with('success','登录成功');

            }else{
                return back()->with('error','密码错误');
            }

        }else{
            return back()->with('error','用户名有误');
        }

    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(Request $request){

       
        $request->session()->pull('id');
        $request->session()->pull('name');
        $request->session()->pull('nodelist');

        return view('Admin/Login/login');
    }

    public function zhu(){
        return view('Admin/Login/zhuce');
    }

    public function ce(UserInsert $request){
        $data=$request->except('_token','repassword');
        $data['password']=Hash::make($data['password']);
        DB::table('admin_users')->insert($data);
        return redirect('/login');
    }
}



