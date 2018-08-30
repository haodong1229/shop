<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getcates(){
        //获取列表数据
        // $cate=DB::select("select *,concat(path,',',id) as paths from cates order by paths");
        //连贯方法结合原始表达式 防止sql语句注入
        $data=DB::table("shop_type")->select(DB::raw('*,concat(path,tid) as paths'))->orderBy('paths')->get();
        //遍历
        foreach($data as $k=>$v){
            // echo $value->path."<br>";
            //转换为数组
            $arr=explode(",",$v->path);
            // echo "<pre>";
            // var_dump($arr);
            //获取逗号个数
            $len=count($arr)-2;
            //字符串重复函数
            $data[$k]->tname=str_repeat("--|",$len).$v->tname;
        }
        return $data;
    }


    public function index(Request $request)
    {
        //
        $keywords=$request->input('keywords');
    	$data=DB::table("shop_type")->select(DB::raw('*,concat(path,tid) as paths'))->where('tname','like',"%".$request->input('keywords')."%")->orderBy('paths')->paginate(7);
    	//return $data;
    	foreach($data as $k=>$v){
    		$arr=explode(",",$v->path);
    		$len=count($arr)-2;
            $data[$k]->tname=str_repeat("--|",$len).$v->tname;
    	}
    	//return $data;
        return view('Admin.type.index',['data'=>$data,'request'=>$request->all(),'keywords'=>$keywords]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=$this->getcates();

        return view("Admin.type.insert",['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加分类
        $request->all();

        $data=$request->except('_token');

        $pid=$request->input('pid');

        if($data['pid']==0){
        	$data['path']='0,';
        }else{
        	$info=DB::table('shop_type')->where('tid','=',$pid)->first();

        	$data['path']=$info->path.$info->tid.',';
        }

        $a=DB::table('shop_type')->insert($data);
        if($a){
        	return redirect('/cate');
        }else{
        	return back();
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
        //修改页面
        $data=DB::table('shop_type')->where('tid','=',$id)->get();
        
        return view('Admin.type.edit',['data'=>$data]);
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
        //修改过程
        $data=$request->except('_token','_method');
        DB::table('shop_type')->where('tid','=',$id)->update($data);
        return redirect('/cate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除分类功能
        $a=DB::table('shop_type')->where('pid','=',$id)->count();

        if($a==0){
           DB::table('shop_type')->where('tid','=',$id)->delete();
           return redirect("/cate");
        }else{
           DB::table('shop_type')->where('pid','=',$id)->delete();
           DB::table('shop_type')->where('tid','=',$id)->delete();
           return redirect("/cate");
        }
    }

}
