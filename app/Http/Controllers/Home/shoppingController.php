<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class shoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //session()->pull("comt.4");
        //return session("comt");

        $data = DB::table('shop_cart')->where('phone','=',session('phone'))->get();
        // var_dump($data);die;
        return view('home.che.index',['data'=>$data]);
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
        
        
         $total="";
         $goods=DB::table("shop_goods")->where("gid",'=',$request->gid)->first();
           $phone=session('phone');
         $phone1=DB::table('shop_cart')->where('phone','=',$phone)->get();
         if($request->input('gid')){
        foreach ($phone1 as $row){
            if($row->gid==$request->input('gid')){
                $num=$request->input('op');
                $cnt=$row->cnt;
                $total=($num+$cnt)*$goods->price;
                $a['cnt']=$num+$cnt;
                $a['total']=$total;
                DB::table("shop_cart")->where('gid','=',$request->input('gid'))->update($a);
                $comt=DB::table("shop_cart")->where('phone','=',$phone)->get();
                foreach($comt as $row){
                    session(["comt.$row->gid"=>$row]);
                }
                return redirect('/shopping');
            }
        } 
                $data['phone']=$phone;//用户ID
                $data['cnt']=$request->input('op');//op选中的数量 
                $data['gid']=$request->input('gid');//商品ID
                $data['otime']=date('Y.m.d H:i:s');//加购时间

                $data['gname']=$goods->gname;//商品名称
                $data['gpic']=$goods->gpic;//商品图片
                $data['price']=$goods->price;//商品单价
                $total+=$request->input('op')*$goods->price;//商品小计
                $data['total']=$total;
                 // dd($data['total']);
                 DB::table("shop_cart")->insert($data);
                $comt=DB::table("shop_cart")->where('phone','=',$phone)->get();

                foreach($comt as $row){
                            session(["comt.$row->gid"=>$row]);
                        }
                //return $comt;
                        //return session("comt");
                return redirect('/shopping');  
        }else{
            foreach ($phone1 as $comt){
                
                session(["comt.$comt->gid"=>$comt]);
            
            }
            return redirect('/shopping'); 
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
        
    }
   
    //删除操作  
    public function spdel(Request $request){
        
        $cid=$request->cid;
        $gid=$request->gid;
        DB::table("shop_cart")->where("cid",'=',$cid)->delete();
        session()->pull("comt.$gid");
        echo 0;       
    }


     //加
    public function reduce(Request $request){
         $cid=$_GET['add'];
           $data=DB::table("shop_cart")->where('cid','=',$cid)->get();
           foreach($data as $row){
             if($row->cnt==100){
                echo '当前商品最多加购10件';
             }else{
                $r['cnt']=($row->cnt)+'1';
                $r['total']=$r['cnt']*$row->price;
                // var_dump($r);die;
                DB::table("shop_cart")->where('cid','=',$cid)->update($r);
               return $r;
             }
       }
    }

    //减
    public function plus(){
       $cid=$_GET['jian'];
           $data=DB::table("shop_cart")->where('cid','=',$cid)->get();
           foreach($data as $row){
             if(($row->cnt) <= 1){
                $row->cnt = '1';
                echo '当前商品不能再减了';
             }else{
                $r['cnt']=($row->cnt)-'1';
                $r['total']=$r['cnt']*$row->price;
                // var_dump($r);die;
                DB::table("shop_cart")->where('cid','=',$cid)->update($r);
               return $r;
             }
       }
        
    }

    // //删除
    // public function del($id){
    //     // echo $id;
    //     //获取session
    //     $data=session('cart');
    //     //遍历
    //     foreach($data as $key=>$value){
    //         if($value['id']==$id){
    //             //直接删除
    //             unset($data[$key]);
    //         }
    //     }
    //     //重新赋值
    //     session(['cart'=>$data]);
    //     return redirect("/homecart");
    // }
}
