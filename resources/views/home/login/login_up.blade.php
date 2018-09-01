<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>凡客诚品 - 会员免费注册</title>
    
    <script type="text/javascript" language="javascript" src="/login_in_static/js/jquery-1.8.3.min.js"></script>
    <link rel="shortcut icon" href="//ssl.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/login_in_static/css/css_1.css" />
    <script type="text/javascript" language="javascript" src="/login_in_static/js/js_1.js"></script>
    <link href="/login_in_static/css/reg.css" type="text/css" rel="stylesheet" /></head>
  
  <body id="body" class="wrapper">
    <div id="top" style="margin:10px 0 0 0;padding:0 0 10px 0; border-bottom:solid 1px #919191;">
      <img src="/login_in_static/picture/logo_new.jpg" alt="凡客诚品" title="凡客诚品" onclick="javascript:window.location.href='/'" style="cursor:pointer" /></div>
    <!--logo-->
<form action="/login_in" method="post" id="ss">

    {{csrf_field()}}

      <span class="box15"></span>
      <div class="regist">
        <h1>注册新用户
          <span>我已经注册，现在就
            <a href="/login_in">登录</a></span>
        </h1>
        <div style="width: 100%; height: 10px; overflow: hidden; clear: both;"></div>
        <div class="content_left">
          <div class="tag clearfix">
            <h2>选择注册方式：</h2>
            <ul id="tags">
              <li class="tb-email" onclick="TabChange('email');return false;">使用Email注册</li>
              <li class="tb-phone tb-phone-select" onclick="TabChange('phone');return false">使用手机号注册</li></ul>
          </div>
          <style type="text/css">.newtxt { *overflow:visible; *z-index:100; }</style>
          <!--tag-->
          <div class="infor clearfix" style="overflow: inherit">
            <div class="email">
              <ul id="v2regListInfo_bar">
                <li id="lipiccode" style="display: block !important; zoom: 1;">
                  <div id="_quickcode" class="newtxt" style="border: 0 none; width: 415px; overflow: inherit;
                  zoom: 1;">

                    <!-- 验证码输入框 -->
                    <input id="_quickpiccode" name="code" type="text" placeholder="请输入图片验证码" value="" style="width: 260px;
                    border: solid 1px #cbcbcb; height: 43px; line-height: 43px;">

                    <img id="_quickpiccodeimg" oldsrc="/login_in_static/picture/calculatevalidatecode_1.ashx" onclick="this.src='{{captcha_src()}}'+Math.random()" src="{{captcha_src()}}" style="cursor: pointer; vertical-align: middle;
                    width: 140px; height: 45px; position: absolute; top: 0; left: 272px;">

                  </div>
                </li>
                <li id='liemail' style="display: none;">
                  <div class="v2regListInfo_rtCont">
                    
                    <span class="box3"></span>
                    <span class="v2reg_tips02"></span>
                    <span class="box5"></span>
                  </div>
                  <span class="Rclear"></span>
                </li>
                <li id='liphone' style="zoom: 1;">
                  <div class="v2regListInfo_rtCont" style="position: relative; zoom: 1;">
                    <div id="_umobile" class="newtxt" style="width: 260px; float: left;">
                      <input maxlength='11' type="text" value="" name="phone" id="input_phone" tabindex="1" placeholder="请输入手机号码" />
                    </div>
                    
                     <span class="v2reg_tips02"></span>


                    <span class="box5"></span>
                  </div>
                  <span class="Rclear"></span>
                </li>
               
                <li>
                  <div class="v2regListInfo_rtCont" style="position: relative;">
                    <div id="_mpassword" class="newtxt" style="width: 410px;">
                      <input maxlength="16" type="password" name="upass" placeholder="请输入密码" id="input_password" value="" tabindex="3" /></div>
                    <span class="v2reg_tips01"></span>

                    <span class="box5"></span>
                  </div>
                  <span class="Rclear"></span>
                </li>
                <li>
                  <div class="v2regListInfo_rtCont" style="position: relative;">
                    <div id="_mpassword2" class="newtxt" style="width: 410px;">
                      
                      <input maxlength="16" type="password" name="repass" placeholder="请输入重复密码" id="input_repassword" value="" tabindex="4" /></div>
                    <span class="box3"></span>
                    <span class="v2reg_tips03"></span>
                    <span class="box5"></span>
                  </div>
                  <span class="Rclear"></span>
                </li>

                <li>
                  <div class="v2reg_bt">
                    <span>
                      <input id="chk_agreen" type="checkbox" onclick="chkfn.call(this)" />
                      <label for="chk_agreen" style="width: 100%; float: none;">请阅读
                        <a target="_blank" href="" class="reda10_ft12">《VANCL凡客诚品服务条款》</a></label>
                    </span>
                    <span class="box10"></span>
                    <button class=".sub" style="width:100%;">
                      
                        <div id="submitRegister_false" class="submitStyle" style="background: red; color: #FFFFFF;">立即注册</div>

                    </button>
                    <a href="javascript:" onclick="$('#submitRegister').click();return false;" style="display: none;">
                      <div id="submitRegister" class="submitStyle">立即注册</div></a>
                  </div>
                </li>
              </ul>
            </div>
            <!--email--></div>
          <!--infor--></div>
        <!--content_left-->
        <div class="content_right">
          <img src="/login_in_static/picture/login120412_newlogo_1.jpg" id="ContentPlaceHolder1__advertImage" style="width: 465px; display: none" />
          <img src="/login_in_static/picture/login120412_newlogo_1.jpg" style="width: 465px" /></div>
        <!--content_right-->
        <div class="clear"></div>
      </div>
      <!--regist-->
      
      <!--wrapper-->
</form>
    <script type="text/javascript">
      function hoverinput(id, fun) {
        var jqobj = $("#" + id);
        //            $(jqobj).hover(function () {
        //                var _value = $(this).find("input").val();
        //                $(this).find("input").focus();
        //                if (_value == "") {
        //                    $(this).find("label").css({ "z-index": "8" });
        //                    $(this).find("input").removeClass("hoverinput").addClass("hoverinput");
        //                }
        //            }, function () {
        //                var _value = $(this).find("input").val();
        //                if (_value != "") {
        //                    $(this).find("input").removeClass("hoverinput");
        //                } else {
        //                    $(this).find("label").css({ "z-index": "10" });
        //                }
        //                $(this).find("input").blur();
        //            });
        $(jqobj).bind("click",
        function() {
          var _value = $(this).find("input").val();
          $(this).find("input").focus();
          if (_value == "") {
            $(this).find("label").css({
              "z-index": "8"
            });
            $(this).find("input").removeClass("hoverinput").addClass("hoverinput");
          }

          if (typeof fun != "undefined") {
            fun();
          }
        });

        $(jqobj).find("input").focus(function() {
          var _value = $(this).val();
          if (_value == "") {
            $(this).parent().find("label").css({
              "z-index": "8"
            });
            $(this).parent().find("input").removeClass("hoverinput").addClass("hoverinput");
          }
        });

        $(jqobj).find("input").blur(function() {
          var _value = $(this).val();
          if (_value != "") {
            $(this).removeClass("hoverinput");
          } else {
            $(this).parent().find("label").css({
              "z-index": "10"
            });
          }
          //$(this).blur();
        });

        $(jqobj).find("input").keyup(function() {
          var _value = $(this).val();
          if (_value != "") {
            $(this).removeClass("hoverinput");
          }
        });

        $(jqobj).find("input").keydown(function() {
          var _value = $(this).val();
          if (_value != "") {
            $(this).removeClass("hoverinput");
          }
        });
      }

      $(document).ready(function() {
        $('#_quickpiccodeimg').click(function() {
          $("#_quickpiccodeimg").attr('src', '/Controls/CalculateValidateCode.ashx?key=reg&t=' + new Date().getTime());
        });

        $("#_quickpiccode").blur(function() {
          var sender = $(this);
          var piccode = sender.val();
          if (piccode == null || piccode == '') {
            $("#_quickcode span").html("请输入图片验证码");
            $("#_quickcode span").show();
          } else {
            $("#_quickcode span").hide();
          }
        });

        setTimeout(function() {
          TabChange('phone');
        },
        '10');

        hoverinput("_umobile");
        hoverinput("_mcode");
        hoverinput("_mpassword");
        hoverinput("_mpassword2");
        hoverinput("_quickcode");
        setTimeout(function() {
          $(".v2reg_tips02").removeClass("ssss");
        },
        500);

        hoverinput("_yanzhenma",
        function() {
          $("#_yanzhenma label").css("margin-top", "15px");
          $("#_yanzhenma img").css("margin-top", "15px");
        });
      });

      </script>
    <!--bottom-->
    <center>
      <div id="bottom" align="center">
        <div id="bottoms">
          <p class="bZp3">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
          <div id="footerArea">
            <div class="subFooter">
              <a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a>
              <span class="costumeOrg"></span>
              <a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a>
              <a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a>
            </div>
          </div>
        </div>
      </div>
    </center>
  

  </body>
    <script type="text/javascript">
      phone=false;
      PASS=false;
      REPASS=false;
      CHECK=false;

   //邮箱 失去焦点
   $("input[name='phone']").blur(function(){
    //$(this)在Ajax里解析不了
    o=$(this);
    //获取phone
    m=$(this).val();

    if(m.match(/\d{11,14}/)){
      
      //Ajax检测邮箱是否已经注册
      $.get("/dologinup",{m:m},function(data){

      

        if(data==1){
         
         phone=false;

         $('.v2reg_tips02').css("color","red").html('手机号已经被注册!');
        }else{    
        //添加样式
         $('.v2reg_tips02').css("color","green").html('手机号可以注册!');;

        phone=true;
        }
      });
    }else{
        phone=false;

        $('.v2reg_tips02').css("color","red").html('手机号必须为11-14位数字!');
    }
   });

   //密码
   $("input[name='upass']").blur(function(){
      //获取密码
      p=$(this).val();

      if(p.match(/\w{4,8}/)==null){
       $('.v2reg_tips01').css("color","red").html("密码必须为4-8位任意的数字字母下划线");

        PASS=false;
      }else{
        $('.v2reg_tips01').css("color","green").html("密码可用");
        
        PASS=true;
      }
   });

   //重复密码
   $("input[name='repass']").blur(function(){
    //获取重复密码
    pp=$(this).val();
    //获取密码
    pps=$("input[name='upass']").val();
    //不等于空  
    if(pp==pps && (pp && pps != '') ){
      $('.v2reg_tips03').css("color","green").html("两次密码一致");
       
        REPASS=true;
    }else{

      $('.v2reg_tips03').css("color","red").html("两次密码不一致");
      REPASS=false;
    }
   });
   
   
   //单击框
   $('input[type=checkbox]').click(function(){
      if ($(this).attr('checked')) {
        CHECK = true;
      }else{
        CHECK = false;
      }
   });

   //给form 绑定提交事件
   $("#ss").submit(function(){
    //在每个匹配的元素上触发某类事件
    $("input").trigger("blur");
    if(phone && PASS && REPASS && CHECK){
        //提交表单
        return true;
    }else{
        return false;
    }
    
   });
    </script>
</html>