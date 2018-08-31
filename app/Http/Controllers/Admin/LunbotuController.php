<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class LunbotuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo '轮播图的首页';

        $data = DB::table('shop_lunbotu')->get();
        //查询数据库是否为空
        $newdata = DB::table('shop_lunbotu')->first();

        // var_dump($data);
        // var_dump(empty($newdata));
        // die;
      //如果为空,赋空值给$data
        if (empty($newdata)) {
            // $array[] = ['id'=>'暂无图片id','img'=>'暂无图片地址'];
            // $data = $array;
            // var_dump($data);
            // die;
            //跳转到新的轮播图页面
            return view('Admin.lunbotu.lunbotu_index2'); 

        }
            // 跳转到正常的轮播图页面
            return view('Admin.lunbotu.lunbotu_index',['data'=>$data]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo '轮播图的添加';
        return view('Admin.lunbotu.lunbotu_create'); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $i = count($request->file());
        for ($a=0;$a<=$i;$a++) {

            if ($request->hasFIle('img'.$a)) {
            $name = rand(1,10000)+time();
            $ext = $request->file('img'.$a)->getClientOriginalExtension();

            //移动到指定的目录下
            $request->file("img".$a)->move("./admin/lunbotu/",$name.".".$ext);
            //路径
            $pathname = "./admin/lunbotu/".$name.".".$ext;
            //装进数组里面
            $data['img'][$a] = $pathname;
            }
        }
        //循环输出
        foreach ($data['img'] as $k=>$v) {
            // 合并数据到数组
            $data['img'] = $v;
            $data['id'] = $k;
            //先删除原有的1-6数据
            DB::table('shop_lunbotu')->where('id','=',$data['id'])->delete();

            // 插入
            DB::table('shop_lunbotu')->where('id','=',$data['id'])->insert($data);
            
            // var_dump($data);
            // die;
        }
        // die;
        return redirect('/lunbotu_index')->with('success','轮播图添加成功');
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
        // $id = '1-'.$id;
        // var_dump($id);
        // die;
        for ($i=0;$i<=6;$i++) {
            //循环删除
            $res = DB::table('shop_lunbotu')->where('id','=',$i)->delete();

        }

        if ($res) {
            return back()->with('success','删除成功');
        }
        
    }
}
