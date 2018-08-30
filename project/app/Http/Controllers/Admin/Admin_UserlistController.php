<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class Admin_UserlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询数据库
        $data = DB::table('admin_users')->get();
        
        return view('Admin.Admin.user_list',['data'=>$data]);
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
        //
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
        //查询数据库
        $user=DB::table("admin_users")->where("id",'=',$id)->first();
        //返回视图
        return view("Admin.Admin.user_edit",['user'=>$user]);
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

        //除了这两个字段
        $data=$request->except(['_token','_method']);
        //密码加密
        $data['password']=Hash::make($data['password']);
        if(DB::table("admin_users")->where("id","=",$id)->update($data)){
            return redirect("/admin_userlist")->with('success',"修改成功");
        }else{
            return redirect("/admin_userlist/$id/edit")->with('error',"修改失败");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;die;
        //找到id删除
         $res = DB::table('admin_users')->where('id','=',$id)->delete();
         DB::table('user_role')->where('uid','=',$id)->delete();
         //跳转
         if ($res) {

            return redirect('/admin_userlist')->with('success','删除成功');
         }else{
            return redirect('/admin_userlist')->with('error','删除成功');

         }
    }
}
