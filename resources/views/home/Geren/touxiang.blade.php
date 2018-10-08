  @extends('home.public.public');
  @section('title','我的资料')
  @section('content')
    <link  type="text/css" rel="stylesheet"  href="/static/geren/css/css_3.css" />
    <script type="text/javascript" src="/static/geren/js/js.js"></script>
    <link href="/static/geren/css/css.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="http://i.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="/static/geren/css/css_1.css" />
    <script type="text/javascript" src="/static/geren/js/js.js"></script>
    <script type="text/javascript" src="/static/js/jquery-1.8.3.min.js"></script>
    <link href="/static/geren/css/css.css"
        rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="http://i.vanclimg.com/common/favicon/favicon.ico"
        type="image/x-icon" />

    <link  type="text/css" rel="stylesheet"  href="/static/geren/css/css_1.css" />

    <script type="text/javascript" src="/static/geren/js/js.js"></script>


    <div class="wrapper">
      <div style="height: 15px; clear: both; overflow: hidden"></div>
      <dl id="position">
        <dt>您当前的位置：
          <a href="http://www.vancl.com">凡客首页</a></dt>
        <dd>&gt;
          <a href="/">我的凡客</a></dd>
        <dd>&gt;
          <span id="UserMap"></span></dd>
      </dl>
      <div id="welcome"></div>
      <div id="side-nav">
        <div class="my_vancl">
          <h2>
            <a href="http://my.vancl.com/" class="track" name="my-left-left-commorder">我的凡客</a></h2>
        </div>
        <ul class="">
          <li>
            <h3>订单中心</h3></li>
          <li class="">
            <a href="http://my.vancl.com/Order/" class="track" name="my-left-left-Order" itemUrl="http://my.vancl.com/Order/" url="http://my.vancl.com/User/UserInfo">·我的订单</a></li>
          <li class="">
            <a href="http://my.vancl.com/Order?type=dingzhi" class="track" name="my-left-left-Order" itemUrl="http://my.vancl.com/Order/?type=dingzhi" url="http://my.vancl.com/User/UserInfo">·我的定制订单</a></li>
          <li class="">
            <a href="http://my.vancl.com/GiftCard" class="track" name="my-left-left-card" itemUrl="http://my.vancl.com/GiftCard" url="http://my.vancl.com/User/UserInfo">·我的优惠券</a></li>
          <li class="no_bg">
            <a href="http://my.vancl.com/UserPoints/Index" class="track" name="my-left-left-huiyuanscore" itemUrl="http://my.vancl.com/UserPoints/Index" url="http://my.vancl.com/User/UserInfo">·我的积分</a></li>
        </ul>
        <ul class="">
          <li>
            <h3>客户服务</h3></li>
          <li class="">
            <a href="http://returns.vancl.com/" class="track" name="my-left-left-returnorder" itemUrl="http://returns.vancl.com/" url="http://my.vancl.com/User/UserInfo">·退货办理</a></li>
          <li class="">
            <a href="http://my.vancl.com/comment/" class="track" name="my-left-left-productcomment" itemUrl="http://my.vancl.com/comment/" url="http://my.vancl.com/User/UserInfo">·我要评价</a></li>
          <li class="">
            <a href="http://my.vancl.com/question" class="track" name="my-left-left-productquestion" itemUrl="http://my.vancl.com/question" url="http://my.vancl.com/User/UserInfo">·商品提问</a></li>
        </ul>
        <ul class="service-rate">
          <li>
            <h3>账户管理</h3></li>
          <li class="">
            <a href="http://my.vancl.com/user/account" class="track" name="my-left-left-account" itemUrl="http://my.vancl.com/user/account" url="http://my.vancl.com/User/UserInfo">·账户余额</a></li>
          <li class="">
            <a href="http://my.vancl.com/DeliveryAddress/Index" class="track" name="my-left-left-modifyDeliveryInfo" itemUrl="http://my.vancl.com/DeliveryAddress/Index" url="http://my.vancl.com/User/UserInfo">·收货地址</a></li>
          <li class="">
            <a href="http://my.vancl.com/SafeCenter" class="track" name="my-left-left-modifypassword" itemUrl="http://my.vancl.com/SafeCenter" url="http://my.vancl.com/User/UserInfo">·账户安全</a></li>
          <li class="">
            <a href="http://my.vancl.com/User/UserInfo" class="track selected" name="my-left-left-personinfo" itemUrl="http://my.vancl.com/User/UserInfo" url="http://my.vancl.com/User/UserInfo">·我的资料</a></li>
          <li class="no_bg">
            <a href="http://my.vancl.com/federatedlogin" class="track" name="my-left-left-assoaccount" itemUrl="http://my.vancl.com/federatedlogin" url="http://my.vancl.com/User/UserInfo">·我的关联账户</a></li>
        </ul>
      </div>
      <input type="hidden" id="isCheckHid" value="0" />
      <input type="hidden" id="ReturnURL" value="" />
      <div id="main">
        <div class="mngbox">
          <div class="main">
            <div class="content">
              <div class="title">
                <h3>我的资料</h3></div>
              <div class="blank10"></div>
              <ul class="edit-nav">
                <li>
                  <a class="selected" href="/User/UserInfo" class="track" name="my_personinfo_Basic">基本资料</a></li>
              </ul>
              <script type="text/javascript" language="javascript">function previewImgLoad() {
                  var cutpic = $("#cutpic");
                  cutpic.find(".bigimg>.mask").hide();
                  $("div[class^='imgareaselect']").show();
                }
                function chenageAvatarType(obj) {
                  $("#form0").submit();
                }</script>
              <form action="/User/ChangeType" data-ajax="true" data-ajax-complete="setChangeAvatar();" data-ajax-method="post" data-ajax-mode="replace" data-ajax-update="#cutpic" id="form0" method="post">
                <div class="change">
                  <input name="AvatarType" id="AvatarType2" type="radio" value="VT" checked="checked" onclick="chenageAvatarType(this);" autocomplete="off" />选择头像</div></form>
              <input type="hidden" id="hidcustomerPath" value="" />
              <input type="hidden" id="LastUploadaction" value="" />
              <div id="cutpic">
                <!-- 给头像排列 -->
                
                <div class="pic_list">
                  <ul>@for($i=1;$i
                    <=12;$i++) <li>
                      <a>
                        <img class="touxiong" width="60" height="60" src="/static/geren/picture/pic{{$i}}.jpg" onclick="fun({{$i}})" /></a></li>@endfor</ul>
                </div>
                <div class="finishnew" style=" margin:8px;">
                  <ul>
                    <li style=" height:127px;">
                      <img border="0" src="{{$aaa->face}}" width="90" height="90" id="txfuzhi" />
                      <span class="blank10w"></span>
                      <a id="OK" class="track save" onclick="SaveVT();" name="my_avatar_change_save" style=" width:90px;" href="">
                        <img style=" display:inline;" border="0" src="/static/geren/picture/savebtn.jpg" /></a>
                    </li>
                    <li style=" width:108px;  padding-top:30px;">
                      <p fid="msgvtnoimage" style=" height:36px;">设置个性化头像
                        <br/>展现你的与众不同！</p>
                      <img class="maskall" style="  margin-top:30px;" src="/static/geren/picture/loading.gif" />
                      <p fid="tipsavevt" style=" display:none; margin-top:38px;_margin-top: 48px; "></p>
                    </li>
                  </ul>
                </div>
                <div class="clear"></div>
                <form id="form1" action="/user/_SaveAvatarVT" enctype="multipart/form-data" method="post">
                  <input type="hidden" id="filename" name="filename" value="" />
                  <input type="hidden" id="ID" name="ID" value="0" /></form>
                <script type="text/javascript">$(function() {
                    VT_PageInit();
                  });</script>
              </div>
              <script type="text/javascript">$(function() {
                  $("a[name='my_left_left_personinfo']").addClass("selected");
                })</script>
              <table class="fieldset">
                <tbody>
                  <tr>
                    <td class="label" colspan="2" style="text-align: left; padding-left: 42px;">用户名：
                      <span class="user-name">{{$aaa->nname}}</span>
                      <em style="color: #333;
                      margin-left: 5px; display: none" id="isCheck">（已验证）</em>
                    </td>
                  </tr>
                  <tr>
                    <td class="label" colspan="2" style="text-align: left; padding-left: 42px;">为了您账户的安全，请
                      <span style="color: #a10000">验证手机</span>和
                      <span style="color: #a10000">验证邮箱</span></td>
                  </tr>
                  <form action="/baocun" method="post">@if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <ul>@foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>@endforeach</ul></div>@endif
                    <tr>
                      <td class="label">
                        <span style="color: red;">*</span>昵&nbsp;&nbsp;称:</td>
                      <td>
                        <input type="text" maxlength="16" class="contact" name="nname" id="nname" value="{{$aaa->nname}}" onblur="CheckOnBlur(this.id)" />
                        <div id="WrongUniqueNickName" class="shuru0316"></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="label">
                        <span style="color: red;">*</span>真实姓名：</td>
                      <td>
                        <input type="text" class="contact" name="rname" id="TrueName" value="{{$aaa->rname}}" onblur="CheckOnBlur(this.id)" />
                        <div id="WrongTrueName" class="shuru0316">
                          <p>请填写您的姓名</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="label">
                        <span style="color: red;">*</span>性&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
                      <td>
                        <input type="hidden" id="txtSex" value="0" />
                        <input class="sex" id="female" name="sex" type="radio" value="w" @if( '{{$aaa->sex}}'){ checked } @endif />
                        <label for="female">女</label>
                        <input class="sex" id="male" name="sex" type="radio" value="x" @if( '{{$aaa->sex}}'){ checked } @endif />
                        <label for="male">男</label></td>
                    </tr>
                    <tr>
                      <td class="label">
                        <span style="color: red;">*</span>出生日期：</td>
                      <td>
                        <select name="bYear" class="ddlist" id="bYear" data-year="" onchange="createSelect('bYear','bMonth','bDay')">
                          <option selected="selected" value="">请选择</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="1996">1996</option>
                          <option value="1995">1995</option>
                          <option value="1994">1994</option>
                          <option value="1993">1993</option>
                          <option value="1992">1992</option>
                          <option value="1991">1991</option>
                          <option value="1990">1990</option>
                          <option value="1989">1989</option>
                          <option value="1988">1988</option>
                          <option value="1987">1987</option>
                          <option value="1986">1986</option>
                          <option value="1985">1985</option>
                          <option value="1984">1984</option>
                          <option value="1983">1983</option>
                          <option value="1982">1982</option>
                          <option value="1981">1981</option>
                          <option value="1980">1980</option>
                          <option value="1979">1979</option>
                          <option value="1978">1978</option>
                          <option value="1977">1977</option>
                          <option value="1976">1976</option>
                          <option value="1975">1975</option>
                          <option value="1974">1974</option>
                          <option value="1973">1973</option>
                          <option value="1972">1972</option>
                          <option value="1971">1971</option>
                          <option value="1970">1970</option>
                          <option value="1969">1969</option>
                          <option value="1968">1968</option>
                          <option value="1967">1967</option>
                          <option value="1966">1966</option>
                          <option value="1965">1965</option>
                          <option value="1964">1964</option>
                          <option value="1963">1963</option>
                          <option value="1962">1962</option>
                          <option value="1961">1961</option>
                          <option value="1960">1960</option>
                          <option value="1959">1959</option>
                          <option value="1958">1958</option>
                          <option value="1957">1957</option>
                          <option value="1956">1956</option>
                          <option value="1955">1955</option>
                          <option value="1954">1954</option>
                          <option value="1953">1953</option>
                          <option value="1952">1952</option>
                          <option value="1951">1951</option>
                          <option value="1950">1950</option>
                          <option value="1949">1949</option>
                          <option value="1948">1948</option>
                          <option value="1947">1947</option>
                          <option value="1946">1946</option>
                          <option value="1945">1945</option>
                          <option value="1944">1944</option>
                          <option value="1943">1943</option>
                          <option value="1942">1942</option>
                          <option value="1941">1941</option>
                          <option value="1940">1940</option></select>
                        <select name="bMonth" class="ddlist" id="bMonth" data-month="" onchange="createSelect('bYear','bMonth','bDay')">
                          <option value="">请选择</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option></select>
                        <select name="bDay" class="ddlist" id="bDay" data-day="" onblur="CheckOnBlur(this.id)">
                          <option selected="selected" value="">请选择</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option></select>
                        <div id="WrongBirthDay" class="shuru0316">
                          <p>出生日期信息不完整</p>
                        </div>
                        <em>注意：出生日期填写后将不可修改，请认真填写，谢谢！</em></td>
                    </tr>
                    <tr>
                      <td class="label">收信邮箱：</td>
                      <td>
                        <input class="contact" type="text" name="email" id="Email" value="{{$aaa->email}}" onblur="CheckOnBlur(this.id)" />
                        <span style="color: #A10000; float: left; margin-left: 5px; margin-top: 5px; cursor: pointer;" onclick="CheckYZEmail();">去验证&gt;&gt;</span>
                        <div id="WrongEmail" class="shuru0316">
                          <p>Email格式错误</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="label">
                        <span style="color: red;">*</span>地&nbsp;&nbsp;&nbsp;&nbsp;区：</td>
                      <td>
                        <select class="sel" id="cid">
                          <option class="ss">--请选择地区--</option></select>

                      </td>
                    </tr>
                          <input type="hidden" name="area" value="" id="abc">
                    <tr>
                      <td class="label" style="padding-top: 18px;">
                        <span style="color: red;">*</span>详细地址：
                      </td>
                      <td>
                        <div id="AddressHeadMessage"></div>
                        <input class="contact w315" type="text" name="addr" id="addr" value="{{$aaa->addr}}" onblur="CheckOnBlur(this.id)" />
                        <div id="WrongAddress" class="shuru0316">
                          <p>请填写您的详细地址</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="label">邮政编码：</td>
                      <td>
                        <input class="contact" type="text" name="postal" id="postal" value="{{$aaa->postal}}" onblur="CheckOnBlur(this.id)" />
                        <div id="WrongPostalCode" class="shuru0316">
                          <p>邮政编码必须是6位数字</p>
                        </div>
                        <span id="SetPostalCode" class="info-tip"></span>
                      </td>
                    </tr>
                    <tr>
                      <td class="label">
                        <span style="color: red;">*</span>手&nbsp;&nbsp;&nbsp;&nbsp;机：</td>
                      <td>
                        <input class="contact" type="text" name="phone" id="phone" value="{{$aaa->phone}}" onblur="CheckOnBlur(this.id)" />
                        <div id="WrongMobile" class="shuru0316">
                        
                        </div>
                      </td>
                    </tr>
                    <input type="hidden" name="uid" value="{{$tx}}" id="oo">

                    <tr>
                      <td>&nbsp;</td>
                      <td>
                        <button type="submit" id="button" class="track save"></button>
                        <img style="display: none;" fid="saving" src="/static/geren/picture/loading.gif" /></td>
                    </tr>{{csrf_field()}}</form>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <input id="IsUserGetFullInfoPoint" type="hidden" value="False" />
      <div class="blank0" style="height:32px;"></div>
      
      <div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10">
        <ul>
          <li class="downApp">
            <a href="//m.vancl.com/html/app.html#ref=hp-hp-head-mobile-v:n" target="_blank"></a>
          </li>
          <li class="online">
            <a href="//imweb.vancl.com/" target="_blank"></a>
          </li>
          <li class="BlackTop">
            <a href="javascript:;" onclick="javascript:document.getElementById('headerTopArea').scrollIntoView()"></a>
          </li>
        </ul>
      </div>
      <script type="text/javascript">$(document).ready(function() {
          var hostname = window.location.host;
          if (hostname != "demowww.vancl.com" && hostname != "www.vancl.com" && hostname != "www.fanke.com") {
            $(".subnavCon em").css({
              display: "block"
            });
            $(".subnavCon").hover(function() {
              $(this).find("em").addClass("emtop");
              $(this).parent().find(".categoryList").show();
            },
            function() {
              $(this).find("em").removeClass("emtop");
              $(this).parent().find(".categoryList").hide();
            });
            $(".categoryList").hover(function() {
              $(this).show();
            },
            function() {
              $(this).hide();
              $(this).parent().find(".subnavCon em").removeClass("emtop");
            });
          }
        });
        setTimeout(function() {
          var bp = document.createElement('script');
          bp.src = '//push.zhanzhang.baidu.com/push.js';
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(bp, s);
        },
        1000);
        $(function() {
          $(".subNav").hide();
          $(".navlist ul li").hover(function() {
            $(this).find(".subNav").stop(true, true);
            $(this).find(".subNav").slideDown();
          },
          function() {
            $(this).find(".subNav").stop(true, true);
            $(this).find(".subNav").slideUp();
          });
        })</script>
    </div>
    <div id="WeixinBox" style="display:none; position: fixed; bottom:0; z-index:1000;width:146px;">
      <img src="/static/geren/picture/tc.png" alt="关闭" title="关闭" style="float:right;cursor:pointer;" onclick="closeWeixin();" />
      <span class="blank0"></span>
      <img src="/static/geren/picture/vanclqrcode2.jpg" alt="凡客二维码" title="凡客二维码" style="width:144px;border:1px solid #EFEFEF;" /></div>
    <script type="text/javascript" src="/static/geren/js/js.js"></script>
    <script type="text/javascript" src="/static/geren/js/js.js"></script>
    <script language="javascript" type="text/javascript">$(function() {
        //是否是验证用户
        var is_check = $("#isCheckHid").val();
        if (is_check == 1) {
          $("#isCheck").show();
        }
        $("#UserMap").html("<a href='/User/UserInfo'> 我的资料</a>");
      });

      function CheckYZEmail() {
        location.href = "/SafeCenter";
        
      }

      function CheckYZMobile() {
        var province = $("#Province").find("option:selected").text();
        var isSpecialProv = false;
        if (province.indexOf("香港") > -1 || province.indexOf("澳门") > -1 || province.indexOf("台湾") > -1) {
          isSpecialProv = true;
        }
        var Mobile = $.trim($("#Mobile").val());
        var retval = true;

        if (Mobile == "") {
          $("#WrongMobile").show();
          $("#WrongMobile").html("<p>请填写要验证的手机号码</p>");
          retval = false;
        } else {
          //非港澳台
          if (!isSpecialProv) {
            if (Mobile != "" && Mobile.length != 11) {
              $("#WrongMobile").show();
              $("#WrongMobile").html("<p>手机号码必须11位</p>");
              retval = false;
            } else if (Mobile != "" && Check_Mobiles(Mobile) == false) {
              $("#WrongMobile").show();
              $("#WrongMobile").html("<p>请输入正确的手机号码</p>");
              retval = false;
            } else {
              $("#WrongMobile").hide();
            }
          } else {
            if (Mobile != "" && Mobile.length > 11) {
              $("#WrongMobile").show();
              $("#WrongMobile").html("<p>手机号码过长</p>");
              retval = false;
            }
          }

        }

        if (true == retval) {
          window.location = "/SafeCenter/NewMobile?val=" + Mobile;
        }

        return retval;

      }</script>
    <script type="text/javascript">
         //触发点击事件 i就是循环出来图片的序号
      function fun(i){
        // alert(i);
        b=$(".touxiong")[i-1].src;//点击img获取图片路径
        // alert(b);
        $("#txfuzhi").attr('src',b);//点击的图片赋值给右边图片
      }
    ad=$("#oo").val();
     // alert(ad);
    //保存头像时的点击事件
      function SaveVT(){
          // alert(a);
         $.get('/txshangchuan',{b:b,ad:ad},function(data){
            // alert(data);
         });
      }

      upid=0;
      $.get('/chengshi',{upid:upid},function(data){
        b=JSON.parse(data);
         // alert(b[0]['name']);
             // document.write(b);
             for (var i=0;i < b.length;i++) {

            $(".ss").attr("disabled",true);
      
            option = '<option value="'+b[i].id+'" class="cid">'+b[i].name+'</option>';
            
                    $("#cid").append(option);
            }
            
          
      });

       
        // 获得其他几级数据
        //事件委派,live(事件,事件处理器函数)
        $("select").live("change",function(){
            // alert($(this).attr('name'));
         if($(this).attr('name')=='bYear' ){
            
         
      }else if($(this).attr('name')=='bMonth'){
             
       }else if($(this).attr('name')=='bDay'){
            
         }else{

            $(this).nextAll("select").remove();

            o = $(this);
            //获取子级的upid
            upid = $(this).val();
            // alert(upid);
           $.get('/chengshi',{upid:upid},function(data){
             //创建select
                select = $('<select class="sel" ></select>');
                select.append('<option value="" class="mm">--请选择--</option>');
             c=JSON.parse(data);
      if(c.length > 0) {
                for(var i=0;i<c.length;i++){
                    $(".ss").attr("disabled",true);
                    // alert(data[i].name);
                    //存储在option
                    option='<option value="'+c[i].id+'">'+c[i].name+'</option>';
                    // alert(option);
                    //把带有数据的option内部插入到第一个select
                    select.append(option);
                }
                //把创建好的select追加到第一个selcet后
                o.after(select);
                //禁用其他级别 选择
                $(".mm").attr("disabled",true);
                
             }
           });
         }
        });
        //将选择好的地区值存储在数组里
        $("#button").click(function(){
           
          abc=[];
           $(".sel").find('option:selected').each(function(){
             b=$(this).html();
             abc.push(b);
           });

           $("#abc").val(abc);
           // alert(abc);
           // document.writ(abc);

        });



      $("#bYear").find("option").each(function(){
          a=$(this).attr("value");
          // alert(a);
          if(a=={{$bYear1}}){
             $(this).attr("selected",true);
          }
      });

      $("#bMonth").find("option").each(function(){
          a=$(this).attr("value");
          // alert(a);
          if(a=={{$bMonth1}}){
             $(this).attr("selected",true);
          }
      });
      $("#bDay").find("option").each(function(){
        b=$(this).attr('value');
        if(b=={{$bDay1}}){
             $(this).attr("selected",true);
        }
      });
     

    </script>
     </script>

@endsection