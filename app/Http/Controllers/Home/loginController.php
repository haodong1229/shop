<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Hash;
use Session;
use Mail;
class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //一点击退出和切换用户就清除session
        $request->session()->pull('id');
        $request->session()->pull('phone');

        return view('home.login.login_in');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("home.login.login_up");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //注册
    public function store(Request $request)
    {
        $data = $request->except('_token','repass');
        
        // var_dump(session('vcode'));
        //获取到的验证码
        $vcode = session('vcode');
        $data['upass'] = Hash::make($data['upass']);
        $data['nname'] = '新用户';
        //默认头像
        $data['face'] = '/user_info_static/geren/picture/vancl300.jpg';
        
        // var_dump($data);die;
        //判断验证码是否正确
        if ($vcode == $data['code']) {
            // 添加到数据库
            unset($data['code']);
            $res = DB::table('users_info')->insert($data);
            //判断成功
            if ($res) {
                echo '注册成功';
                return redirect('/login_in');
            }else{
                echo '注册失败';
                return redirect('/login_in/create')->with('error','手机号或者密码出现错误');
            }
            
        }else{
            return back()->with('error','验证码错误');
        }
    }

    //找回密码1,加载模板
    public function forget1()
    {
        return view('Home.login.forget');
    }
    //找回密码2,查找用户是否有这个手机号
    public function forget2(Request $request)
    {
        $data = $request->only('phone','code');
        // var_dump(session('vcode'));
        // var_dump($data);
        $vcode = session('vcode');
        if ($data['code'] == $vcode) {
            $user = DB::table('users_info')->where('phone','=',$data['phone'])->first();
            if ($user) {
                $id = $user->uid;
                    
                // var_dump($id);
                return view('Home.login.forget2');
            }else{
                return back()->with('error','手机号错误!');
            }
        }else{
            return back()->with('error','验证码错误!');
        }
    }
    //发送纯文本 视图和数据 $email 接收方 $id注册用户id $token 校验参数
    public function sendMail($email,$id){
        //在闭包函数内部使用闭包函数外部的变量 必须use 导入
        Mail::send('Home.login.email',['id'=>$id], function($message)use($email){
             //发送主题
            $message->subject('密码找回')->to($email);
        });
    }

    //找回密码3,发送邮件验证
    public function forget3(Request $request)
    {
        //获取email的信息
       $email = $request->input('email');
       // var_dump($email);
       //查询数据库
       $info = DB::table('users_info')->where('email','=',$email)->first();
       // var_dump($info);die;
       if ($info) {
            //发送邮件
            $this->sendMail($email,$info->uid);
            // echo '邮件发送成功';
            return redirect('/forget_email')->with('su','邮件发送成功!'); 
       }else{
            return redirect('/forget_email')->with('error','此用户并未绑定邮件!');
       }
    }
    //
    public function forget_email(Request $request)
    {
        return view('Home.login.forget_email');
    }
    //找回密码4,加载重置页面模板
    public function forget4(Request $request)
    {
        $id = $request->input('id');
        return view('home.login.forget3',['id'=>$id]);
    }
    //找回密码5  更新新密码到数据库中
    public function forget5(Request $request)
    {
        $uid = $request->input('uid');
        $data = $request->only('upass','reupass');
        // var_dump($data);die;
        if ($data['upass'] == $data['reupass']) {
            unset($data['reupass']);
            $data['upass'] = Hash::make($data['upass']);
            // var_dump($data  );die;
            DB::table('users_info')->where('uid','=',$uid)->update($data);
            return view('home.login.forget_last');
        }else{
            
            return back()->with('error','密码不一致');
        }
    }
}
