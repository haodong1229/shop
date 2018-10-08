<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>凡客诚品 - 会员登录</title>
    <link href="/login_in_static/css/login.css" rel="stylesheet" type="text/css" />
    <link href="/login_in_static/css/footer.css" rel="stylesheet" type="text/css" />
    <link href="/login_in_static/css/css.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" language="javascript" src="/login_in_static/js/js.js"></script>
    <script type="text/javascript" language="javascript" src="/login_in_static/js/script.js"></script>
    <script type="text/javascript" language="javascript" src="/login_in_static/js/login.js"></script>
    <meta name="keywords" content="凡客诚品 - 会员登录," />
    <meta name="description" content="凡客诚品 - 会员登录" /></head>
  
  <body>
    <center>
      <div id="Head" align="left">
        <a class="logo" href="/"></a>
        <p>
          <a href="" target="_blank">帮助</a></p>
      </div>
    </center>
    <div class="wrapper">
      <div style="width: 100%; height: 25px; position: relative;">
        <h3 style="font-size: 22px; color: #979797; font-weight: bolder; text-align: left;
        height: 25px; line-height: 25px; float: right; margin: 0 100px 0 0; width: 400px;
        position: relative;">凡客 Vancl 登录
          <span style="font-size: 14px; font-weight: normal; position: absolute;
          right: 0px; bottom: 0px;">没有账户免费
            <a id="gotoRseg" href="/login_in/create" style="color: #b42025;
            margin: 0px;">注册</a>
          </span>
        </h3>
      </div>
      <div class="login">
        <div class="tag">
          <ul id="tags">
            <li class="on" style="width:100%;">普通登录</li>
            
          </ul>
        </div>
        <!--tag-->
        <div id="shows">
          <div class="user_infor">
            <form action="/dologinin" method="post">
            {{csrf_field()}}

            <div id="vanclLoginError" class="tips">{{session('error')}}</div>
            <div id="_uname" class="newtxt">
             
              <input id="vanclUserName" name="phone" placeholder="请输入手机号" type="text" />
            
            </div>
            <br>
              <span class="v2reg_tips01" style="color: red;">{{session('error')}}</span>
           
            <div id="_upwd" class="newtxt">
          
              <input id="vanclPassword" name="upass" placeholder="请输入密码" type="password" class="inputtextcolor" value="" /></div>
            <div id="vanclPasswordError" class="tips">密码不能为空!</div>
            
            <div id="validateError" style="display: none" class="tips">验证码不能为空!</div>
            <div class="bt">
              <span id="userThaw" style="display:none;">
                <a class="forget" href="ThawUser.aspx">账户解冻</a>
              </span>
              <a class="forget" href="/forget1">找回密码</a>
              <div class="clear"></div>
              <button style="background: url('/login_in_static/images/login.bmp');width:360px;height:45px;"></button>
              </form>
            </div>
          </div>
          
          <!-- 横线 -->
          <div class="lines"></div>
          <div class="glup">
            <span class="blank10"></span>
            <h2 class="hezuo">使用合作网站账号登录凡客</h2>
            <span class="blank10"></span>
            <p class="qkimg">
              <a href="javascript:void(0)" id="a_wxlogin" class="weixin"></a>
              <a class="xiaomi"  href="javascript:void(0)"></a>
              <a href="javascript:void(0)"  class="zhifubao"></a>
              <a class="qq" href="javascript:void(0)" ></a>
              <a class="qihu360" href="javascript:void(0)" ></a>
              <a class="weibo" href="javascript:void(0)" ></a>
              <div class="clear"></div>
              <div class="blank10"></div>
            </p>
          </div>
          <!--tishi--></div>
        <!--user_infor-->
        <div class="user_infor" style="display: none">
          <div id="vjiaLoginError" class="tips">用户名或者密码错误!</div>
          <p>
            <label>用户名：</label>
            <input id="" name="PartnerUserName" type="text" value="820880ea2fc14ee1b6633c8b55de0bec" /></p>
          <div id="vjiaUserNameError" class="tips">用户名不能为空!</div>
          <p>
            <label>密 码：</label>
            <input id="" name="PartnerPassword" type="password" class="inputtextcolor" value="" /></p>
          <div id="vjiaPasswordError" class="tips">密码不能为空!</div>
          <p id='pVjiaValidate' style="display:none">
            <label>验证码：</label>
            <input maxlength="6" style="width: 65px;" id="vjiacalculatevalidate" name="vjiacalcultatevalidate" type="text" class="inputtextcolor" value="" />
            
          </p>
          <div id="vjiaValidateError" style="display: none" class="tips">验证码不能为空!</div>
          <div class="bt">
            <a id="vjiaLogin" class="log" href="#">登 录</a>

            <a class="forget" href="wangji">忘记密码啦？</a></div>
          <div class="tishi">
            <span>提示：</span>使用V+账户登录后系统会自动为您注册一个与V+帐户相关联的VANCL帐户。帐户关联后您可共享V+的会员积分和累积消费金额。</div></div>
      </div>
      <div class="advert">
        <img src="/login_in_static/picture/login120412_newlogo.jpg" id="_advertImage" style="width: 465px; display: none" />
        <img src="/login_in_static/picture/login120412_newlogo.jpg" style="width: 465px" /></div>
      <!--shows-->
      <div style="clear: both;"></div>
    </div>
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
    <script src="/login_in_static/js/quicklogin.js"></script>
  </body>
    <script type="text/javascript">
      
    </script>

</html>