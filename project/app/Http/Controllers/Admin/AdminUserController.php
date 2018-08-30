<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Hash;
class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $list = DB::select("select * from admin_users as au,user_role as ur,role as r where au.id = ur.uid and ur.rid = r.id");

        // var_dump($list);die;
        return view('Admin.Admin.quanxian_list',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Admin.user_insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取账号密码
        $data = $request->only('username','password');
        //密码加密
        $data['password'] = Hash::make($data['password']);
        //打印
        // var_dump($request->only('rid'));die;
        //执行添加
        $res = DB::table('admin_users')->insert($data);
        if ($res) {
            return redirect('/admin_quanxian')->with('success','添加成功');
        }else{
            return redirect('/admin_quanxian/create')->with('error','添加失败');
            
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
        // echo $id;die;
        //查询单个用户表
        $list = DB::table('admin_users')->where('id','=',$id)->first();
        
        $role = DB::table('role')->where('id','=',$id)->first();
        // var_dump($role);die;
        $node = DB::table('node')->get();
        //查询当前角色已有的权限信息
        $data = DB::table('role_node')->where('rid','=',$id)->get();
        if (count($data)) {
            //遍历
            foreach($data as $v){
                $nids[] = $v->nid;
            }
            // var_dump($nids);die;
            //加载模板
        return view('Admin.Admin.user_quanxianedit',['list'=>$list,'role'=>$role,'node'=>$node,'nids'=>$nids]);
        }else{
        return view('Admin.Admin.user_quanxianedit',['list'=>$list,'role'=>$role,'node'=>$node,'nids'=>array()]);

        }
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
        $nid = $_POST['nid'];
        $rid = $request->input('rid');
        // var_dump($nid);die;
        //删除重复的rid

        DB::table('role_node')->where('rid','=',$id)->delete();

        foreach($nid as $v) {

            $data['rid'] = $rid;
            $data['nid'] = $v;
            //循环插入
            // var_dump($data);
            DB::table('role_node')->insert($data);
        }

        return redirect('/admin_quanxian')->with('success','权限设置成功');

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
