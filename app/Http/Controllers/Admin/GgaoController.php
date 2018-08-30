<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GgaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data=DB::table('shop_ggao')->where('title','like',"%".$request->input('keyword')."%")->select()->paginate(7);
        return view('Admin.Ggao.index',['data'=>$data,'request'=>$request->input('keyword')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Ggao.insert');
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
        $data=$request->except('_token');
        $data['time']=time();
        //return $data;
        DB::table('shop_ggao')->insert($data);

        return redirect('/gao');
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
       $data=DB::table('shop_ggao')->where('id','=',$id)->get();
        return view('Admin.ggao.edit',['data'=>$data]);
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
        $data=$request->except('_token','_method');
        DB::table('shop_ggao')->where('id','=',$id)->update($data);
        return redirect('/gao');
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
        DB::table('shop_ggao')->where('id','=',$id)->delete();
        return redirect('/gao');
    }

    public function del(){
        foreach($_GET['b'] as $a){
            DB::table('shop_ggao')->where('id','=',$a)->delete();
        }
        return 1;
    }
}
