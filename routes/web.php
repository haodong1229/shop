<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//后台 


//后台登录页
Route::resource("/login","Admin\LoginController");

//后台退出登录
Route::get("/logout","Admin\LoginController@logout");

Route::group(['middleware'=>'login'],function(){
	//后台首页
	Route::resource("/index","Admin\AdminController");
	//分类控制器 主页 删除 修改 添加
	Route::resource('/cate','Admin\CateController');
	//后台用户查看与修改和删除
	Route::resource("/admin_userlist","Admin\Admin_UserlistController");
	//角色分配
	Route::get('/purview_fenpei/{id}','Admin\PurController@fenpei');
	//角色保存
	Route::post('/purview_baocun','Admin\PurController@baocun');
	//后台权限管理模块(可以添加管理员)
	Route::resource("/admin_quanxian","Admin\AdminUserController");
	//广告模块
	Route::resource("/guanggao_index","Admin\GuanggaoController");
	//轮播图模块
	Route::resource("/lunbotu_index","Admin\LunbotuController");
	//商品管理
	Route::resource('/shop','Admin\ShopController');
	//公告管理
	Route::resource('/gao','Admin\GgaoController');
	//公告批量删除
	Route::get('/del','Admin\GgaoController@del');
	//前台会员管理
	Route::resource('/index_vip','Admin\Index_VipController');
	//订单详情
	Route::resource('/detail','Admin\DetailController');
	//评价管理
	Route::resource('/ping','Admin\PingController');
	//提问管理
	Route::resource('/tiwen','Admin\TiwenController');

});

//前台

//前台登录页面,包括注册
Route::resource('/login_in','Home\loginController');
//找回密码  加载模板
Route::get('/forget1','Home\loginController@forget1');
//找回密码2,查找用户是否有这个手机号
Route::post('/forget2','Home\loginController@forget2');
//找回密码3	发送邮件验证
Route::post('/forget3','Home\loginController@forget3');
//加载邮件发送成功模板
Route::get('/forget_email','Home\loginController@forget_email');
//找回密码4 加载重置密码模板 
Route::get('/forget4','Home\loginController@forget4');
//找回密码5 更新新密码到数据库中
Route::post('/forget5','Home\loginController@forget5');
//验证码加载
Route::get('/code','Home\LogininController@code');
//登录验证
Route::resource('/dologinin','Home\LogininController');
// 电话重复的ajax验证
Route::get('/dologinup','Home\dologinupController@dologinup');
//前台首页
Route::resource('/','Home\indexController');
//前台列表页
Route::resource('/list','Home\listController');
//前台列表搜索
Route::get('/search','Home\listController@lists');
 //详情页
Route::resource('/xiangqing',"Home\xiangqingController");
//提问
Route::resource("/hping","Home\HpingController");


//放入中间件
Route::group(['middleware'=>'homelogin'],function(){

//购物车列表
 Route::resource("/shopping","Home\shoppingController");
// 删除
 Route::get('/spdel',"Home\shoppingController@spdel");
//加
 Route::get("/sp_reduce","Home\shoppingController@reduce");
//减
 Route::get("/sp_plus","Home\shoppingController@plus");

//我的订单
Route::get('/dingdan','Home\dingdanController@index');
//下单页
Route::resource('/checkout','Home\CheckoutController');
//下单城市级联
Route::get('/checkout_chengshi','Home\CheckoutController@chengshi');
//下单页添加地址信息
Route::post('/checkout_addr','Home\CheckoutController@addr');
//付款页面
Route::get('/checkout_fukuan','Home\CheckoutController@fukuan');

////前台个人中心
Route::get('/geren',"Home\GrController@index");//访问个人中心
Route::get('/gredit',"Home\GrController@edit");//用户修改昵称
Route::get('/touxiang',"Home\GrController@touxiang");//修改 资料头像页面
Route::get('/txshangchuan',"Home\GrController@txshangchuan");//更换头像上传
Route::get('/chengshi',"Home\GrController@chengshi");//城市级联
Route::post('/baocun',"Home\GrController@baocun");//修改个人信息后提交的路由
});

