<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Http\Model\Index;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcates($pid){

        $sort = DB::table('shop_type')->where('pid','=',$pid)->get();
        //遍历
          // dd($sort);
        $data=[];
        foreach($sort as $k=>$value){
            // var_dump($value);die;
            $value->dev=$this->getcates($value->tid);
            $data[]=$value;

        }
        return $data;
        
    }
    public function index()
    {
        // echo '前台首页';
        //查询轮播图
        $lun = DB::table('shop_lunbotu')->get();
        //广告图片
        $g = DB::table('shop_guanggao')->first();
        //分类遍历出来
        // var_dump($s);
        // die;
        $date=DB::table('shop_type')->where('pid','=',0)->get();

        foreach($date as $row){
            $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
        }
        return view('home.index.index',['lun'=>$lun,'g'=>$g,'data'=>$data,'date'=>$date]);
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
