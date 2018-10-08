<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class dingdanController extends Controller
{
    //订单首页
    public function index(){
        $phone=session('phone');
        // dd($phone);
        $data1=DB::table("shop_orders")->where("shop_orders.phone",'=',$phone)->join("shop_detail",'shop_detail.oid','=','shop_orders.oid')->get();
        // var_dump($data1);die;

        $users1 = DB::table("shop_orders")->where("shop_orders.phone",'=',$phone)->where("dstatus",'=',0)->join("shop_detail",'shop_detail.oid','=','shop_orders.oid')->get();
        // var_dump($users1);die;
        $users2 = DB::table("shop_orders")->where("shop_orders.phone",'=',$phone)->where("dstatus",'=',1)->join("shop_detail",'shop_detail.oid','=','shop_orders.oid')->get();
        // var_dump($users2);die;
        $users3 = DB::table("shop_orders")->where("shop_orders.phone",'=',$phone)->where("dstatus",'=',2)->where('pstatus','=',0)->join("shop_detail",'shop_detail.oid','=','shop_orders.oid')->get();
        $users4 = DB::table("shop_orders")->where("shop_orders.phone",'=',$phone)->where("dstatus",'=',2)->where('pstatus','=',1)->join("shop_detail",'shop_detail.oid','=','shop_orders.oid')->get();
        
        //统计状态值的个数
        $a=count($data1);
        $a1=count($users1);
        $a2=count($users2);
        $a3=count($users3);
        $a4=count($users4);
        
         $date=DB::table('shop_type')->where('pid','=',0)->get();//引入几级分类到页面
        foreach($date as $row){
            $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
        }
        return view("Home.dingdan.index",['data1'=>$data1,'a'=>$a,'a1'=>$a1,'a2'=>$a2,'a3'=>$a3,'a4'=>$a4,'users1'=>$users1,'users2'=>$users2,'users3'=>$users3,'users4'=>$users4,'date'=>$date,'data'=>$data]);
    }
}
