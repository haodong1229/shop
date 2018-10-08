<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GuanggaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = DB::table('shop_guanggao')->get();
        // var_dump($list);die;

        return view('Admin.Admin.guanggao_index',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

        return view('Admin.Admin.guanggao_add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // var_dump($request->all());die;
        if ($request->hasFIle('img')) {
            $name = rand(1,10000)+time();
            $ext = $request->file('img')->getClientOriginalExtension();

            //移动到指定的目录下
            $request->file("img")->move("./admin/uploads/",$name.".".$ext);
            //路径
            $pathname = "./admin/uploads/".$name.".".$ext;
            //装进数组里面
            $data['img'] = $pathname;
            // var_dump($data);die;
            //插入
            DB::table('shop_guanggao')->insert($data);

        }
        return redirect('/guanggao_index')->with('success','广告添加成功');
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
        $img = DB::table('shop_guanggao')->where('id','=',$id)->first();
        // var_dump($img);die;
          unlink($img->img);
        $res = DB::table('shop_guanggao')->where('id','=',$id)->delete();
        if ($res) {
            // unlink();
            return back()->with('success','广告删除成功');
        }else{
            return back()->with('error','广告删除失败');

        }
    }
}
