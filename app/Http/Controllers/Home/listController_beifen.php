<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class listController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $tid=$request->input('tid');
        $id=$request->input('id');
        $date=DB::table('shop_type')->where('pid','=',0)->get();
        foreach($date as $row){
             $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
         }

        if($id==1){
            //默认排序
            $goods=DB::table('shop_goods')->where('tid','=',$tid)->where('status','!=',2)->paginate(3);
            return view('home.list.list',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);
        }else if($id==2){
            //销量排序
            $goods=DB::table('shop_goods')->where('tid','=',$tid)->where('status','!=',2)->orderBy('salecnt','ASC')->paginate(3);
            //return $goods['0']['gname'];
            return view('home.list.list',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);
        }else if($id==3){
            //好评排序
            $goods=DB::table('shop_goods')->where('tid','=',$tid)->where('status','!=',2)->paginate(3);
            return view('home.list.list',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);
        }else if($id==4){
            //新品排序
            $goods=DB::table('shop_goods')->where('tid','=',$tid)->where('status','!=',2)->orderBy('status','ASC')->paginate(3);
            return view('home.list.list',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $tid=$_GET['tid'];
        $pid=DB::table('shop_type')->where('tid','=',$tid)->value('pid');


        $id=$_GET['id'];
        $date=DB::table('shop_type')->where('pid','=',0)->get();
         foreach($date as $row){
             $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
         }
        if($id==1){
            //默认排序
            $goods=DB::table('shop_type')->where('pid','=',$pid)->where('status','!=',2)->join('shop_goods','shop_type.tid','=','shop_goods.tid')->paginate(3);
            return view('home.list.lists',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);

        }else if($id==2){
            //销量排序
            $goods=DB::table('shop_type')->where('pid','=',$pid)->where('status','!=',2)->join('shop_goods','shop_type.tid','=','shop_goods.tid')->orderBy('salecnt','ASC')->paginate(3);
            return view('home.list.lists',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);

        }else if($id==3){
            //好评排序
            $goods=DB::table('shop_goods')->where('tid','=',$pid)->where('status','!=',2)->join('shop_goods','shop_type.tid','=','shop_goods.tid')->orderBy('status','ASC')->paginate(3);
            return view('home.list.lists',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);

        }else if($id==4){
            //新品排序
            $goods=DB::table('shop_type')->where('pid','=',$pid)->where('status','!=',2)->join('shop_goods','shop_type.tid','=','shop_goods.tid')->orderBy('status','ASC')->paginate(3);
            return view('home.list.lists',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        //return $id;
        $goods=DB::table('shop_goods')->where('tid','=',$id)->where('status','!=',2)->paginate(3);
        $date=DB::table('shop_type')->where('pid','=',0)->get();
        foreach($date as $row){
            $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
        }
        //return $data;
        return view('home.list.list',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        //return $id;
        $goods=DB::table('shop_type')->where('pid','=',$id)->where('status','!=',2)->join('shop_goods','shop_type.tid','=','shop_goods.tid')->paginate(3);

        $date=DB::table('shop_type')->where('pid','=',0)->get();
        foreach($date as $row){
            $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
        }
        return view('home.list.lists',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);
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

    public function lists(Request $request)
    {
        $goods=DB::table('shop_type')->join('shop_goods','shop_type.tid','=','shop_goods.tid')->where('status','!=',2)->where('gname','like',"%".$request->input('keyword')."%")->paginate(10);

        $date=DB::table('shop_type')->where('pid','=',0)->get();
        foreach($date as $row){
            $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
        }
        return view('home.list.lists',['date'=>$date,'data'=>$data,'goods'=>$goods,'request'=>$request->all()]);
    }
}
