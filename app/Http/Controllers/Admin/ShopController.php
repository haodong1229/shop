<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data=DB::table('shop_goods')->join('shop_type','shop_type.tid','=','shop_goods.tid')->where('gname','like',"%".$request->input('keyword')."%")->select()->paginate(7);
        return view('Admin.shop.index',['data'=>$data,'request'=>$request->input('keyword')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=DB::table('shop_type')->select()->get();
        //dd($data);
        return view('Admin.shop.insert',['data'=>$data]);
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
        if($request->hasFile('gpic')){
            $name=time()+rand(1,1000);
            $ext=$request->file('gpic')->getClientOriginalExtension();
            $request->file('gpic')->move('./images',$name.'.'.$ext);
            //$a='/upload/'.$name.'.'.$ext;
        }
        $data=$request->except('_token');
        $data['gpic']='/images/'.$name.'.'.$ext;
        $data['ctime']=time();
        DB::table('shop_goods')->insert($data);
        return redirect('/shop');
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
        //dd($id);
        $data=DB::table('shop_goods')->where('gid','=',$id)->join('shop_type','shop_type.tid','=','shop_goods.tid')->select()->first();
        //dd($data);
        $datas=DB::table('shop_type')->select()->get();
        //dd($data);
        return view('Admin.shop.edit',['data'=>$data,'datas'=>$datas]);
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
        //dd($request->all());
        $data=$request->except('_token','_method');
        if($request->hasFile('gpic')){
            $name=time()+rand(1,1000);
            $ext=$request->file('gpic')->getClientOriginalExtension();
            $request->file('gpic')->move('./images',$name.'.'.$ext);
            $data['gpic']='/images/'.$name.'.'.$ext;
        }     
        DB::table('shop_goods')->where('gid','=',$id)->update($data);
        return redirect('/shop');
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
        //return $id;
        DB::table('shop_goods')->where('gid','=',$id)->delete();
        return redirect('/shop');
    }
}
