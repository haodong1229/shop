<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PurController extends Controller
{
   public function fenpei($id)
   {
   		//查询用户表
        $list = DB::table('admin_users')->where('id','=',$id)->first();
        // var_dump($list);die;
        // //查询角色表
        $r = DB::table('user_role')->where('uid','=',$id)->get();
        // //查询角色权限表
        $pur = DB::table('role')->get();
        // var_dump(count($r));die;
        //统计$pur的个数,如果没有给空数组
        if (count($r)) {
        foreach ($r as $v) {
            $rids[] =$v->rid;
        }
        // var_dump($rids);die;
        return view('Admin.Admin.user_qxfp',['list'=>$list,'pur'=>$pur,'rids'=>$rids]);
    	}else{
    		return view('Admin.Admin.user_qxfp',['list'=>$list,'pur'=>$pur,'rids'=>array()]);
    	}
   }

   public function baocun(Request $request)
   {
   	//获取表单的数据
   		$data = $request->except('_token');
   		// var_dump($data);die;
   		//删除当前用户已有的角色信息
   		DB::table('user_role')->where('uid','=',$data['uid'])->delete();

   		//添加
   		if (DB::table('user_role')->insert($data)) {

   			return redirect('/admin_userlist')->with('success','设置权限成功');

   		}else{
   			return back()->with('error','设置权限失败');
   		}
   }
}
