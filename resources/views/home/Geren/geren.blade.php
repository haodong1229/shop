  @extends('home.public.public');
  @section('title','我的凡客')
  @section('content')
    <link  type="text/css" rel="stylesheet"  href="/user_info_static/geren/css/css_2.css" />
    <script type="text/javascript" src="/user_info_static/geren/js/js.js"></script>
    <link href="/user_info_static/geren/css/css.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="http://i.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="/user_info_static/geren/css/css_1.css" />


    <div class="wrapper">
        <div style="height: 15px; clear: both; overflow: hidden">
        </div>
        <dl id="position" >
            <dt> 您当前的位置：<a href="/">凡客首页</a></dt>
			<dd> &gt; <a href=""> 我的凡客 </a></dd>
			<dd>&gt; <span id="UserMap"></span></dd>
		</dl>
		<div id="welcome"> 
		</div>

<div id="side-nav">
<div class="my_vancl">
    <h2>
        <a href="" class="track" name="my-left-left-commorder" >我的凡客</a></h2>
</div>
    <ul class="">
        <li>
            <h3>
                订单中心</h3>
        </li>
                        <li class=""><a href="http://my.vancl.com/Order/" class="track" name="my-left-left-Order" itemUrl="http://my.vancl.com/Order/" url="http://my.vancl.com/" >
                ·我的订单</a></li>
                <li class=""><a href="/dingdan" class="track" name="my-left-left-Order"  itemUrl="http://my.vancl.com/Order/?type=dingzhi" url="http://my.vancl.com/">
                    ·我的定制订单</a></li>
                        <li class=""><a href="http://my.vancl.com/GiftCard" class="track" name="my-left-left-card" itemUrl="http://my.vancl.com/GiftCard" url="http://my.vancl.com/" >
                ·我的优惠券</a></li>
                        <li class="no_bg"><a href="http://my.vancl.com/UserPoints/Index" class="track" name="my-left-left-huiyuanscore" itemUrl="http://my.vancl.com/UserPoints/Index" url="http://my.vancl.com/" >
                ·我的积分</a></li>
    </ul>
    <ul class="">
        <li>
            <h3>
                客户服务</h3>
        </li>
                        <li class=""><a href="http://returns.vancl.com/" class="track" name="my-left-left-returnorder" itemUrl="http://returns.vancl.com/" url="http://my.vancl.com/" >
                ·退货办理</a></li>
                        <li class=""><a href="http://my.vancl.com/comment/" class="track" name="my-left-left-productcomment" itemUrl="http://my.vancl.com/comment/" url="http://my.vancl.com/" >
                ·我要评价</a></li>
                        <li class=""><a href="http://my.vancl.com/question" class="track" name="my-left-left-productquestion" itemUrl="http://my.vancl.com/question" url="http://my.vancl.com/" >
                ·商品提问</a></li>
    </ul>
    <ul class="service-rate">
        <li>
            <h3>
                账户管理</h3>
        </li>
                        <li class=""><a href="http://my.vancl.com/user/account" class="track" name="my-left-left-account" itemUrl="http://my.vancl.com/user/account" url="http://my.vancl.com/" >
                ·账户余额</a></li>
                        <li class=""><a href="http://my.vancl.com/DeliveryAddress/Index" class="track" name="my-left-left-modifyDeliveryInfo" itemUrl="http://my.vancl.com/DeliveryAddress/Index" url="http://my.vancl.com/" >
                ·收货地址</a></li>
                        <li class=""><a href="http://my.vancl.com/SafeCenter" class="track" name="my-left-left-modifypassword" itemUrl="http://my.vancl.com/SafeCenter" url="http://my.vancl.com/" >
                ·账户安全</a></li>
                       <li class="no_bg"><a href="/touxiang?uid={{$a->uid}}" class="track" name="my-left-left-assoaccount" itemUrl="" url="/touxiang?uid={{$a->uid}}" >
                ·我的资料</a></li>
                        <li class="no_bg"><a href="/touxiang?uid={{$a->uid}}" class="track" name="my-left-left-assoaccount" itemUrl="" url="/touxiang?uid={{$a->uid}}" >
                ·我的关联账户</a></li>
    </ul>
</div>

<script type='text/javascript' src='/user_info_static/geren/js/js.js'></script>
<style>
    /*1214*/
    .blank30
    {
        clear: both;
        display: block;
        font-size: 1px;
        overflow: hidden;
        height: 30px;
    }
    .AsecurityBox0212
    {
        width: 781px;
    }
    .AsecurityBox0212 .aslevel
    {
        margin-left: 15px;
    }
    .asLevelUl a.withoutVaLink12
    {
        color: #a10000;
        padding-left: 6px;
    }
    .AsecurityBox0212 .aslevelAtart
    {
        color: #999 !important;
    }
    .AsecurityBox0212 .asLevelUl li
    {
        margin: 0px 5px 0px 13px;
        float: left;
        display: inline;
    }
    .my_cont12
    {
        border: none;
        padding: 0px 0px 0px 10px;
        width: 775px;
    }
    .my_txt12
    {
        width: 667px;
    }
    .nickname-panel12
    {
        width: 667px;
    }
    .vjia12
    {
        color: #333;
    }
    .AsecuryMessage12 em
    {
        font-style: normal;
        color: #666;
    }
    .AsecuryMessage12 em.mal1230
    {
        margin-left: 30px;
    }
    .AsecuryMessage12 a
    {
        color: #a10000;
    }
    .my_pic a.myPicEdit12
    {
        line-height: 50px;
    }
    .txt212
    {
        border: 1px solid #dcdcdc;
        width: 460px;
        float: left;
        background: #f8f8f8;
    }
    .txt212 .orderStatusul12 li
    {
        height: 36px;
        line-height: 36px;
        border-bottom: 1px dotted #999;
        width: 308px;
        padding-left: 20px;
        color: #333;
    }
    .txt212 .orderStatusul12 li .padr1220
    {
        padding-right: 20px;
    }
    .txt212 .orderStatusul12 li a span
    {
        color: #a10000;
    }
    .txt212 .orderStatusul12 li.orderStatusli1201
    {
        width: 440px;
        font-weight: bold;
    }
    .txt212 .orderStatusul12 li.orderStatusli1202
    {
        border-right: 1px dotted #999;
    }
    .txt212 .orderStatusul12 li.orderStatusli1203
    {
        border-bottom: none;
    }
    .txt212 .orderStatusul12 li .red12
    {
        color: #a10000;
    }
    .txt212 .orderStatusul12 li .grey12
    {
        color: #666;
    }
    .txt212 .orderStatusul12 li .rules20120112
    {
        font-weight: bold;
        padding-left: 23px;
    }
    .vancladmin_recomtitle12 li
    {
        width: 132px;
        padding-left: 25px;
        line-height: 29px;
        text-align: left;
        float: left;
        background: url(/user_info_static/geren/images/menu_bg.gif) no-repeat left top;
        margin-right: 2px;
        font-size: 12px;
        font-weight: bold;
        color: #666;
    }
    .vancladmin_recomtitle12 .on
    {
        width: 132px;
        text-align: left;
        padding-left: 25px;
    }
    .vancladmin_recomtitle12 li.vancladminrecomtitleLiMore
    {
        background: none;
        width: auto;
        float: right;
        margin-right: 3px;
        display: inline;
    }
    .inviteTable12
    {
        margin-top: 0px;
        border-top: none;
    }
    
    #menubox ul.vancladmin_recomtitle12
    {
        overflow: hidden;
        border-bottom: 3px #8e0000 solid;
        width: 785px;
    }
    #menubox ul.vancladmin_recomtitle12 li
    {
        width: 132px;
        padding-left: 25px;
        line-height: 29px;
        text-align: left;
        float: left;
        background: url(/user_info_static/geren/images/menu_bg.gif) no-repeat left top;
        margin-right: 2px;
        font-size: 12px;
        font-weight: bold;
    }
    #menubox ul.vancladmin_recomtitle12 .mrnone
    {
        margin: 0;
    }
    #menubox ul.vancladmin_recomtitle12 a, #menubox ul.vancladmin_recomtitle12 a:visited
    {
        color: #666;
    }
    #menubox ul.vancladmin_recomtitle12 .on
    {
        width: 132px;
        background: url(/user_info_static/geren/images/menuon_bg.gif) no-repeat left top;
        color: #fff;
        cursor: pointer;
    }
    #menubox ul.vancladmin_recomtitle12 .on a, #menubox ul.vancladmin_recomtitle12 .on a:visited
    {
        color: #fff;
    }
    #menubox ul.vancladmin_recomtitle12 li.vancladminrecomtitleLiMore
    {
        background: none;
        width: auto;
        float: right;
        margin-right: 3px;
        display: inline;
    }
    #menubox ul.vancladmin_recomtitle12 li.vancladminrecomtitleLiMore a
    {
        color: #a10000;
    }
    .inviteTable12
    {
        margin-top: 0px;
        border-top: none;
    }
    
    .opinion12, .opinion13
    {
        background: url(/user_info_static/geren/images/yjtop.jpg) no-repeat;
        width: 36px;
        height: 93px;
        display: block;
    }
    .opinion13
    {
        background-position: 0px -95px;
        margin-top: 3px;
    }
    
    /*0108*/
    .rv1_tuijianlist02
    {
        float: left;
        width: 739px;
    }
    .rv1_tuijianlist02 li
    {
        float: left;
        margin-left: 10px;
        display: inline;
    }
    .vancladminBtLeft, .vancladminBtRight
    {
        width: 21px;
        height: 100px;
        background: url(/user_info_static/geren/images/scrollbtn.jpg) no-repeat 0px 0px;
        float: left;
        margin-top: 29px;
        display: inline-block;
        text-indent: -9999px;
        cursor: pointer;
        overflow: hidden;
    }
    .vancladminBtRight
    {
        background-position: -33px 0px;
        float: right;
    }
</style>
<div class="right_cont">
    
    <div style="margin-top: -10px;">
<div class="blank10"></div>    </div>
    <span class="blank0"></span>
    
    <div class="AsecurityBox02 AsecurityBox0212">
    <div class="aslevel">
        <em>安全级别：</em>
        <div class="asProgSpeed">
            <span class="asProgNow">弱</span><span class="">中</span><span class="">强</span>
        </div>
    </div>
    <ul class="asLevelUl">
        <li class="aslevelPhone01"><a href="/SafeCenter" title="手机未验证"
                class="asLink track" name="my-safe-phone"></a><a href="/SafeCenter" class="withoutVaLink12">手机未验证</a></li>
        <li class="aslevelEmail01"><a href="/SafeCenter" title="邮箱未验证"
                class="asLink track" name="my-safe-email"></a><a href="/SafeCenter" class="withoutVaLink12">邮箱未验证</a></li>
        <li class="aslevelPassword01" style="display:none;"><a href="/SafeCenter"
                title=">未设置支付密码" class="asLink track" name="my-safe-pay"></a><a href="/SafeCenter" class="withoutVaLink12">
                    未设置支付密码</a></li>
    </ul>
    <div class="aslevelAtart" style="display:none;">
        为了您账户资金安全，建议进行<a href="/SafeCenter" class="track" name="my-safecenter">设置</a></div>
</div>

    <span class="blank30"></span>
    
    <div class="my_cont my_cont12">
        <div class="my_pic">
            <div>
                <div>
                    <a href="/touxiang?uid={{session('id')}}" class="track" name="my_boot_userinfo_updateavatar">
                        <img src="{{$a->face}}" width="90" height="90" /></a>
                </div>
            </div>
            <a href="/touxiang?uid={{$a->uid}}" class="track" name="my_boot_useinfo_edituserinfo">编辑个人资料</a>
        </div>
        <div class="my_txt my_txt12 "
            <!--infor-->
            <div class="nickname-panel nickname-panel12">
                <div class="nickname-info member-info">
                    <a id="anickname">您好！<em id="bNickName">{{$a->nname}}</em></a><a id="modify" href="#"
                        class="track" name="my_boot_useinfo_Modify">(修改)</a>
                    <div id="member" style="display: none;">
                            <a href="javascript:void(0);" class="track member memberimg" name="my_boot_useinfo_level">
                                <img alt="" src="/user_info_static/geren/picture/member_2012.gif"  />
                            </a>
                        <div class="member-tip">
                            <p><img src="/user_info_static/geren/picture/icon2.gif" />升级成为<em>VIP</em>会员：需再消费 <em>5000.00</em> 元，或一次性消费
      <em>800</em> 元以上
    </p><p>
      升级成为<em>SVIP</em>会员：需一次消费 <em>1500</em> 元以上
    </p>
                        </div>
                    </div>
                </div>
                <div class="nickname-info nicknamecanlce" id="modifyname">
                    <input type="text" id="nickname" name="nickName" autocomplete="off" value="" />
                    <button id="aConfirm" class="track" name="my_boot_useinfo_OK">
                    </button>
                    <a href="#" id="nameCancle" class="track" name="my_boot_useinfo_cancel">取消</a> <span
                        class="error-tip"><span id="tip">中英文均可，2~16个字符</span> </span>
                </div>
                <div class="vjia vjia12" data-partner="False">
                        <input type="hidden" id="Level" value="Common" />
                        <input type="hidden" id="LevelMoney01" value="5000" />
                        <input type="hidden" id="LevelMoney12" value="10000" />
                        <input type="hidden" id="LevelSum" value="0.00" />
                        <input type="hidden" id="LevelShunyan1" value="1000" />
                        <input type="hidden" id="LevelShunyan2" value="2500" />
                        <input type="hidden" id="LevelTotalSum" value="0" />
                        <input type="hidden" id="EndTime" value="9989年12月31日" />
                        <input type="hidden" id="EndTime2" value="9990年12月31日" />
                    <span class="AsecuryMessage12" style="display: none;">消息提醒：<em>商品问答回复</em>（<a href="/question/index"><span
                        id="spanReply">0</span></a>）<em class="mal1230">投诉/建议回复</em>（<a href="#"><span id="spanProposal">0</span></a>）</span></div>
            </div>
            <span class="blank0"></span>
            <div class="txt2 txt212">
                <span class="blank5"></span>
                <ul class="orderStatusul12">

                    <li id="liOrderRelative" class="orderStatusli1201">订单提醒:<span style="display:inline-block;width:24px;height:25px;"></span>进行中的订单：(0) 待评价的订单(0)</li>

                        <li class="orderStatusli1202">VIP级别：<span style="display:inline-block;  position: relative;top:2px;*top:0px;width:24px;height:13px;background:url(/user_info_static/geren/images/userlevelgrowth_24_13.jpg); background-position:0px -0px; "></span>，成长值：10</li>
                    <li class="orderStatusli1202">账户余额:{{$a->money}}<a href="/user/account" target="_blank" class="track underline red12"
                        name="my_boot_useinfo_userbalance">￥</a></li>
                    <li class="orderStatusli1202">总消费额66￥</li>
                    <li class="orderStatusli1202 ">可用优惠券：<span class="grey12">
                            <span>--</span>
                    </span></li>
                    <li class="orderStatusli1202 orderStatusli1203 ">会员积分：{{$a->init}}分<a class="track rules20120112 red12"
                            href="http://s.vancl.com/jifen?type=point&amp;ref=my-boot-jifen-mall" name="my-boot-jifen-mall"
                            target="_blank" style="display: none">积分商城</a></li>
                </ul>
                <span class="blank0"></span>
            </div>
            <div style="float: right;">
                <img src="/user_info_static/geren/picture/myvancl_weixin.png" alt="" titile="">
            </div>
            <span class="blank10"></span>
        </div>
        <span class="blank0"></span>
    </div>
    <!--防止boot.js报错-->
    <input type="hidden" id="partUserUrl" value="" />
<script type="text/javascript">
    $(document).ready(function () {
        //异步获取总消费金额和订单数
        $.ajax({
            type: "get",
            url: "/Boot/GetSumOrderInfo",
            dataType: "Json",
            success: function (data) {
                //$("#spanSum").html(data.OrderSum);
                $("#spanOrderCount").html(data.OrderCount);
            }
        });

        //异步获取进行中订单和未评论订单
        $.get("/Boot/_SubUserInfo", function (data) {
            $("#liOrderRelative").html(data);
        });

        //异步获取商品问答数据
        //        $.get("/Question/GetNotReadAmount", function (data) {
        //            $("#spanReply").html(data);
        //        });
    });
</script>
    <!--- 首页推荐 --->
    <span class="blank15"></span>
    <div class="vancladmin_recombar" style="display: none;">
        <ul class="vancladmin_recomtitle vancladmin_recomtitle12">
            <li class="on" style="cursor: pointer; color: #fff;"><a class="track" name="my-recommend-tab-favorites"
                style="margin-left: 25px;" href="#" onclick="return false;">为您推荐</a> </li>
            <li class="vancladminrecomtitleLiMore">
                <p class="vancladmin_recommore">
                    <a class="track redfn" name="my_morerecm" target="_blank" href="http://my.vancl.com/recommand/MyCommend"
                        style="float: right; color: #A10000; display: none;">更多&gt;&gt;</a></p>
            </li>
        </ul>
        <div id="tabs-5" class="vancladmin_recomlistbar">
            <div fid="loading" style="display: none; width: 770px; height: 100%;">
                <center>
                    <img src='/user_info_static/geren/picture/loading.gif' alt='加载中……' /></center>
            </div>
            <!--我的凡客 推荐左边翻页-->
            <div class="vancladminBtLeft" style="visibility: hidden; display: none;" currentpage=""
                dirs="left">
            </div>
            <ul fid="recommandlist" class="rv1_tuijianlist02" style="margin-left: 21px;">
                <span class="rclear"></span>
            </ul>
            <!--我的凡客 推荐右边翻页-->
            <div class="vancladminBtRight" style="visibility: hidden; display: none;" currentpage=""
                dirs="left">
            </div>
            <span class="rclear"></span>
        </div>
    </div>
    <span class="blank15"></span>
    <script type="text/javascript">
        
        // 修改个人中心的昵称
        c=$('#bNickName').html("{{$a->nname}}");
        // alert(c);
        a=null;//点击事件获取数据库昵称  赋新值失去焦点时把新值赋给a
        $("#modify").click(function(){
            b=$("#bNickName").html('<input type="text" id="abc">').css("border",'2px solid red');
            if(a==null){
            $("#abc").val('{{"$a->nname"}}');
          }else{
            $("#abc").val(a);
              
          }
            $("#abc").blur(function(){
                c=$("#abc").val();
                // alert(a);
                $("#bNickName").html(c).css("border",'1px solid white');
            $.get('/gredit',{c:c},function(data){
                if(data==1){
                 a=c;
                  alert('修改成功');
                }else{
                    alert('修改失败');
                }
             });
          });
          
     });


    </script>
</div>
@endsection