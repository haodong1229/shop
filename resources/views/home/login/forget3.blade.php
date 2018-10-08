<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=uft-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><title>
  
        找回密码 第三步-VANCL 凡客诚品
</title>
    <link rel="shortcut icon" href="//ssl.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" /><link rel="stylesheet" type="text/css" href="//css.vancl.com/css.ashx?href=[/index/global.css,vanclcommon2012.css],[/login/footer.css]&amp;v=121211" />
    
    <script type="text/javascript" language="javascript" src="//js.vancl.com/js.ashx?href=[/jquery/jquery-1.8.3.min,jquery.fn.alert],[/public/cookies_oper.js,trace.js]&compress"></script>
    
    <link href="https://css.vancl.com/css.ashx?href=[/login/security.css]&v=09060925" type="text/css" rel="stylesheet" />
</head>
<body id="body" class="wrapper">
    <div id="top" style="margin:10px 0 0 0;padding:0 0 10px 0; border-bottom:solid 1px #919191;">
        <img src="http://i1.vanclimg.com/cms/20160119/logo_new.jpg" alt="凡客诚品" title="凡客诚品" onclick="javascript:window.location.href='http://www.vancl.com'" style="cursor:pointer" /></div>
    <!--logo-->
    
 <!-------------------------------------------------找回密码第一步star ---------------------------------------------------------->
  <span class="box15"></span>
  <div id="asRetrieve_passwordBar"><h3>找回密码</h3>
  <span class="box15"></span>
  <!-- pwContentTitle01 的个数是控制四个菜单栏的颜色 -->

  <div class="asRetrieve_pwContent"><p class="sprite_a pwContentTitle03"><span class="asfontnone">1.重置密码</span></p>
  <span class="box30"></span>
    <form method="post" action="/forget5">
    
 
  <ul id="asRetrieve_pwList">
         <li><span class="editName">输入你的密码：</span>
                <input type="password" name="upass"  class="editInput" />

                <span class="v2reg_tips01" style="margin-left:210px;" id="div_username"></span> 
         </li>
         <li><span class="editName">输入重复密码：</span>
                <input type="password" name="reupass"  class="editInput" />
                <span style="color:red;font-size: 20px;">{{session('error')}}</span>

                <span class="v2reg_tips01" style="margin-left:210px;" id="div_username"></span> 
                <input type="hidden" value="{{$id}}" name="uid">
         </li>
         
            <button class="sprite_a DetermineBtn" href="javascript:void(0)">下一步</button>
            {{csrf_field()}}
        </form>
</li>
          </ul>
   <span class="box10"></span>
   <p class="asRetrieve_pwtips">·如果该电子邮箱地址不正确，或者您已经忘记注册时填写的邮箱地址，那我们无法帮您找回密码，建议创建一个新帐户。<br />
   ·请确保您的手机在您的身边，以便及时收取我们的校验码。验证码在两小时内有效。<br />
   ·VANCL凡客诚品给您发送的手机校验码短信提示是免费的。<br />
   ·为了不影响您的正常生活，VANCL凡客诚品的手机短信提醒在每天24:00 至次日 06:00 暂停服务。在此期间的短信内容将在 06:00 后发送给您。<br />
   ·为了您的账号安全，当天您最多可以申请5次找回密码邮件，如果5次仍未成功，建议您请联系客服找回或者次日再来尝试。</p>
  </div>
  </div>
  <span class="box15"></span>
  <!-------------------------------------------------找回密码第一步end ---------------------------------------------------------->


    <!--bottom-->
    <center>
        
<div id="bottom" align="center">
    <div id="bottoms">
      <p class="bZp3">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
      <div id="footerArea">
            <div class="subFooter"><a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span><a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a><a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a></div>
            </div>
    </div>
  </div>
    </center>
    <!--javascript-->
   
</body>
</html>
