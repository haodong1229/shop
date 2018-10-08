<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class xiangqingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        // dd($id);
       // $date=DB::table('shop_type')->where('pid','=',0)->get();
       //  foreach($date as $row){
       //      $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
       //  }
       //  // dd($date);
       //  return view('home.xiangqing.index',['date'=>$date,'data'=>$data]);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $wo=DB::table('shop_goods')->where('gid','=',$id)->first();
        $ping=DB::table('shop_pingj')->where('gid','=',$id)->paginate(4);
        $wi=DB::table('good_talk')->where('gid','=',$id)->where('status','=',1)->paginate(4);
        foreach($ping as $row){
            $row->ptime=date('Y-m-d h:i:s',$row->ptime);
        }
        foreach($wi as $row){
            $row->ptime=date('Y-m-d h:i:s',$row->ptime);
        }
        // dd($wo);
         $date=DB::table('shop_type')->where('pid','=',0)->get();
        foreach($date as $row){
            $data[$row->tid]=DB::table('shop_type')->where('pid','=',$row->tid)->get();
        }
        return view('home.xiangqing.index',['wo'=>$wo,'date'=>$date,'data'=>$data,'ping'=>$ping,'wi'=>$wi]);
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
