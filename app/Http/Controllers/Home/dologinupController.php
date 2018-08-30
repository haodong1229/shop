<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class dologinupController extends Controller
{
    public function dologinup(Request $request)
    {
    	$m = $request->input('m');
    	//查询数据库手机号
    	$res = DB::table('users_info')->where('phone','=',$m)->first();

    	if ($res) {
    		echo '1';
    	}else{
    		echo '0';
    	}
    }
}
