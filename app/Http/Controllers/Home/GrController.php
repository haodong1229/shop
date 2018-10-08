<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//引入校验类
use App\Http\Requests\StoreBlogPost;

class GrController extends Controller
{
	//个人中心
    public function index(Request $request){
      // dd(session('id'));
      //用户的id 需要用session 存
    	$a=DB::table('users_info')->where("uid","=",session('id'))->first();

    	// var_dump($a);die;
      //显示菜单栏的数据
      $date=DB::table('shop_type')->where('pid','=',0)->get();

      foreach($date as $row){
          $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
      }
        //返回个人中心页面 
    	return view("Home.Geren.geren",["a"=>$a,'date'=>$date,'data'=>$data]);
    }

    //用户编辑昵称 Ajax请求
    public function edit(Request $request){
       // echo $_GET['c'];
    	$data['nname']=$_GET['c'];
      //用户的id 需要用session 存

        if(DB::table('users_info')->where("uid",'=',session('id'))->update($data)){
        	echo 1;
        }else{
        	echo 0;
        }
 
    }

   //用户头像操作
   public function touxiang(Request $request){
    // dd($request->uid);
      $tx=$request->uid;
      $aaa=DB::table('users_info')->where('uid','=',$tx)->first();
      
      $bYear1=substr($aaa->addtime, 0,4);
      // dd($aaa);
      $bMonth1=substr($aaa->addtime, 5,2);
      $bDay1=substr($aaa->addtime, 8,2);
      // dd($bYear1);
      
      //显示菜单栏的数据
      $date=DB::table('shop_type')->where('pid','=',0)->get();

      foreach($date as $row){
          $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
      }
      //更换头像编辑个人信息页面
     return view('Home.Geren.touxiang',['tx'=>$tx,'aaa'=>$aaa,'bYear1'=>$bYear1,'bMonth1'=>$bMonth1,'bDay1'=>$bDay1,'date'=>$date,'data'=>$data]);
   }

   //头像更换时上传
   public function txshangchuan(Request $request){
      $a=substr($_GET['b'], -30);
      $data['face']=$a;
      $ad=$_GET['ad'];
      DB::table('users_info')->where("uid",'=',$ad)->update($data);
      return redirect('/txshangchuan');
   }

   //城市级联
   public function chengshi(Request $request){
        // echo $request->input('upid');die;
        $a=DB::table("district")->where("upid",'=',$_GET['upid'])->get();
        echo json_encode($a);
   }

   // 编辑完信息保存到前台用户表
   public function baocun(StoreBlogPost $request){
          // $a=$_POST;
          $a = $request->all();
          // var_dump($a);die;
         $b=$a['bYear']."-".$a['bMonth']."-".$a['bDay'];
          $c=$request->except('bYear','bMonth','bDay','_token');

          $c['area'] = str_replace(',','',$c['area']);
          // var_dump($c);die;
         // dd($c);
         // dd($b);
         $c['birth']=$b;
         // dd($c);

         DB::table("users_info")->where('uid','=',$c['uid'])->update($c);
         return back();//提交完刷新页面 头像可以及时更新
   }


}
