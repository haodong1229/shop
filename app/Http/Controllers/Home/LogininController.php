<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
//验证码
use Gregwar\Captcha\CaptchaBuilder;
use Session;
class LogininController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //验证码
    public function code(){
        ob_clean();//清除操作
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        
    }

    public function index(Request $request)
    {
        
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
    public function store(Request $request)
    {
        //获取登录手机和密码
        $phone = $request->input('phone');
        $upass = $request->input('upass');
        // var_dump($phone.":".$upass);
        $data = DB::table('users_info')->where('phone','=',$phone)->first();
        // var_dump($data);
        // var_dump(session('phone'));
        // die;
        //如果没有该用户,则返回登录页面
        if (empty($data)) {
            return back()->with('error','该手机号未注册,请去注册页面');
        }else{
            //如果密码和数据库的密码一样,则进行下列操作
            if (Hash::check($upass,$data->upass)) {
                // 把id存入session
                session(['id'=>$data->uid]);
                //把phone存入session
                session(['phone'=>$data->phone]);
                return redirect('/');
            }else{
                return back()->with('error','密码错误');
            }
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
}
