<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //ajax城市及联
    public function chengshi(Request $request){
       // $upid = $request->input('upid');
       $upid=isset($_GET['upid'])?$_GET['upid']:'';
       // echo $upid;
       $data = DB::table('district')->where('upid','=',$upid)->get();
       // var_dump($data);
       // return $list;
       echo json_encode($data);

    }
    public function addr(Request $request){
        //获取数据
        $data = $request->except('_token');
        //替换字符串
        $data['area'] = str_replace(',', '',$data['area']);
        // var_dump($data);die;
        //添加到表
        $res = DB::table('address')->insert($data);
        if ($res) {
            //查询表
            // $addr = DB::table('address')->where('path','=',session('id'))->get();
            return redirect('/checkout');
        }else{
            return back();
        }
    }
    public function index(Request $request)
    {
        // //需要获取购物车表的id
        // $data = $request->all();

        $phone = session('phone');
        //查询购物车表,手机号是查询条件   
        $cart = DB::table('shop_cart')->where('phone','=',$phone)->get();
        //变成一维数组
        $cart = array_dot($cart);
        // var_dump(!$cart);die;
        
        //获取订单总价
        //不为空才显示总价和总数量,否则就全部给空值
        if ($cart) {

        foreach ($cart as $key => $value) {
            $total[] = $value->total;
            $ocnt[] = $value->cnt;
        }
        $total = array_sum($total);
        $ocnt = array_sum($ocnt);
        }else{
            $cart = [];
            $total = '';
            $ocnt = '';
        }
        // die;
        //查询地址表
        $path = session('id');
        $addr = DB::table('address')->where('path','=',$path)->get();
        // var_dump($addr);die;
        // var_dump($cart);die;
        
        return view('home.checkout.checkout',['addr'=>$addr,'cart'=>$cart,'total'=>$total,'ocnt'=>$ocnt]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //获取到工作日的快递时间
        $w = $request->input('w');
        $uid = session('id');
        // echo $w.'<br>';//15
        // die;
        // echo $uid;
        $orders = DB::table('shop_orders')->where('uid','=',$uid)->first();

        $ex = $orders->express;
        // var_dump($ex);
        //如果快递时间等于点击的时间,不替换,否则就替换
        if ($ex == $w) {
            echo 'no';
        }else{
    // $res = DB::update('update shop_orders set express = 2" where oid = 1');
            $res = DB::table('shop_orders')->where('uid','=',$uid)->update(['express'=>$w]);
            echo '1';
        }

        if (empty($ex)) {
            $res = DB::table('shop_orders')->where('uid','=',$uid)->update(['express'=>$w]);
            echo 'k';
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo 'store';
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit";
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
        //执行添加到表操作
        $data = $request->except("_token","_method");
        // var_dump(session('comt'));
        // var_dump($data);die;
        //存入oid的参数
        session(['oid'=>$data['oid']]);
        //清除购物车的所有信息
        session()->pull("comt");
        //查询购物车表
        $phone = session('phone');
        $uid = session('id');
        $cart = DB::table('shop_cart')->where('phone','=',$phone)->get();
        //变成一维数组
        $cart = array_dot($cart);
        //循环添加到数据库
        foreach ($cart as $v) {
            // $data = array_only($data,['ormb']);
            $det['gname'] = $v->gname;
            $det['gid'] = $v->gid;
            $det['gpic'] = $v->gpic;
            $det['uid'] = $uid;
            $det['total'] = $v->total;
            $det['ocnt'] = $v->cnt;
            $det['oid'] = $data['oid'];
            $det['phone'] = $data['phone'];
            $det = array_except($det,['ormb','status','otime']);
            // var_dump($det);
            // die;
            DB::table('shop_detail')->insert($det);
        }
        // var_dump($det);die;
        $data['uid'] = session('id');
        // var_dump($data);die;
        $or['oid'] = $data['oid'];
        //添加id到表
        // DB::table('shop_orders')->insert($or);

        if (DB::table('shop_orders')->where('uid','=',$uid)->insert($data)) {
            // echo 'ok';
            // die;
            // 删除购物车的信息
            DB::table('shop_cart')->where('phone','=',$phone)->delete();

            return redirect('/checkout_fukuan');
        }else{
            echo '订单提交失败';
        }
    }
    public function fukuan(Request $request)
    {
        //获得订单的id, 然后相加总和


         //查询订单详情表
        $detail = DB::table('shop_detail')->where('oid','=',session('oid'))->get();
        //使用辅助函数
        $detail = array_dot($detail);
        // var_dump($detail);die;
        //如果没有数据,则不进行以下操作
        if (empty($detail)) {
            die;
        }
        $oid = $detail['0']->oid;

        foreach ($detail as $v) {
            $total[] = $v->total;
        }
        // var_dump($oid);
        $total = array_sum($total);
        // var_dump($total);
        // die;

        //显示菜单栏的数据
      $date=DB::table('shop_type')->where('pid','=',0)->get();

      foreach($date as $row){
          $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
      }
        //清除oid的参数
      session()->pull('oid');
        return view('home.fukuan.fukuan',['oid'=>$oid,'total'=>$total,'data'=>$data,'date'=>$date]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'del';
        
    }
}
