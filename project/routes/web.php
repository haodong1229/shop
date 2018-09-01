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

//后台登录页
Route::resource("/login","Admin\LoginController");

//后台退出登录
Route::get("/logout","Admin\LoginController@logout");

Route::group(['middleware'=>'login'],function(){
	//后台首页
	Route::resource("/index","Admin\AdminController");
	//商品总览 删除 修改
	Route::get("/form","Admin\AdminController@form");
	//添加商品
	Route::get("/insert","Admin\AdminController@insert");
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
	//评论管理

});



//前台登录
Route::resource('/login_in','Home\loginController');
// 电话验证
Route::get('/dologinup','Home\dologinupController@dologinup');
//前台首页
Route::resource('/','Index\indexController');