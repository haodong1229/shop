<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HpingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $did=$_GET['id'];
        $a=DB::table('shop_detail')->where('did','=',$did)->first();
        $gid=$a->gid;
        //dd($gid);
        session(["gid"=>$a]);
        //dd(session('gid'));
        return view('home.ping.index');
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
        //用户名ID
        if(isset($_GET['gping'])){
            if($_GET['gping']==1){
                $a=DB::table('shop_goods')->where('gid','=',$id)->value('gping');
                $b['gping']=++$a;
                DB::table('shop_goods')->where('gid','=',$id)->update($b);
                //dd($b['gping']);
            }elseif($_GET['gping']==2){
                $a=DB::table('shop_goods')->where('gid','=',$id)->value('gping');
                $b['gping']=--$a;
                DB::table('shop_goods')->where('gid','=',$id)->update($b);
                //dd($b['gping']);
            }
        }else{
            $a=DB::table('shop_goods')->where('gid','=',$id)->value('gping');
            $b['gping']=++$a;
            DB::table('shop_goods')->where('gid','=',$id)->update($b);
        }
        $data['uname']=session('phone');
        $data['gid']=$id;
        $data['ptime']=time();
        $data['content']=$_GET['content'];
        DB::table('shop_pingj')->insert($data);
        $abc['pstatus']=1;
        DB::table('shop_detail')->where('oid','=',session('gid')->oid)->where('gid','=',session('gid')->gid)->update($abc);
        session()->pull('gid');

        return redirect("/xiangqing/".$id."");
        //return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo 'edit';die;
        $data['uname']=session('phone');
        $data['ptime']=time();
        $data['content']=$_GET['content'];
        $data['gid']=$id;
        DB::table('good_talk')->insert($data);
        return redirect("/xiangqing/".$id."")->with('wenti','请耐心等待回复');
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
