<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="/faviconlogin.ico" rel="shortcut icon" />
    <!-- 凡客顶部图标 -->
    <link rel="shortcut icon" href="./index_static/picture/faviconlogin.ico" />
    <meta name="keywords" content="VANCL,凡客,凡客诚品,货到付款,快时尚,时尚,品牌服装,男装,女装,童装,鞋,家居,配饰,衬衫,牛津纺,青年布,法兰绒,牛津纺衬衫,法兰绒衬衫,衬衣,长袖衬衫,短袖衬衫,全棉,纯棉,全棉衬衫,纯棉衬衫,全棉衬衣,纯棉衬衣,免烫,免熨,免烫衬衫,免熨衬衫,免烫衬衣,免熨衬衣,牛津纺衬衣,领尖扣,直领,小方领,POLO,短袖POLO,长袖POLO,条纹POLO,素色POLO,T恤,圆领T恤,VT,圆领T,印花T,文化衫,卫衣,打底衫,高领衫,低领,鞋,皮鞋,板鞋,商务皮鞋,正装皮鞋,滑板鞋,潮鞋,休闲皮鞋,帆布鞋,运动鞋,运动休闲鞋,家居鞋,雪地靴,靴子,平底鞋,圆头,尖头,女鞋,休闲鞋,男鞋,丝袜,长筒袜,连裤袜,网袜,天鹅绒,瘦腿袜,中筒袜,筒袜,棉袜,靴袜,打底裤,羽绒服,围巾,棉线衫,开衫,针织衫,外套,西服,休闲西服,夹克,大衣,毛衣,背心,毛背心,裤子,长裤,休闲裤,牛仔裤,牛仔,卡其裤,直筒休闲裤,直筒卡其裤,免烫休闲裤,免烫卡其裤,斜纹休闲裤,斜纹卡其裤,短裤,沙滩裤,内衣,内裤,秋衣,秋裤,三角裤,平角裤,袜子,家居,户外,床品,拖鞋,盖毯,断码,打折,特惠,直降" />
    <meta name="description" content="凡客VANCL 官方网站,互联网快时尚品牌,网上购物首选品牌,提供男装、女装,鞋,家居等多种商品网购,支持货到付款的购物网站,特价商品,优惠券,快速配送,货到付款,买衣服网站首选。" />

    
    <link rel="stylesheet" type="text/css" href="/index_static/css/css.css">
    <link rel="stylesheet" type="text/css" href="/index_static/css/css_1.css">

    <script type="text/javascript" src="/index_static/js/js.js"></script>
    <script type="text/javascript" src="/index_static/js/js_1.js"></script>
    <script type="text/javascript" src="/index_static/js/js_2.js"></script>
    <script type="text/javascript" src="/index_static/js/js_3.js"></script>
  </head>
<body class="full">
  
    <div id="Head" class="vanclHead">
      <div id="headerTopArea" class="headerTopAreaBox">
        <div class="headerTopArea">
          <div class="headerTop">
            <div class="headerTopRight" style="width: 126px;">
              <div class="active notice" id="vanclCustomer">
                <a class="mapDropTitle" href="" target="_blank">网站公告</a></div>
              <div class="payattention">
                <em></em>
                <a href="javascript:void(0);" class="vweixinbox">
                  <span class="vweixin" style="background: url(http://i1.vanclimg.com/cms/20150605/w1.jpg) no-repeat left 3px;"></span>
                  <b class="vweixinTip"></b>
                </a>
                <a href="//e.weibo.com/vancl" class="track vanclweibo" name="hp-hp-head-weibo-v:n" target="_blank" style="background: url(http://i2.vanclimg.com/cms/20150605/w2.jpg) no-repeat left 3px;"></a>
              </div>
            </div>
            <div class="headerTopLeft">
              <div id="welcome" class="top loginArea">您好,<a href="/geren">{{session('phone')}}</a>
                
                @if(session('phone'))
                <span style="color: #a10000"><a class="top track" style="color: #a10000" href="/login_in" target="_parent" name="head-tcdl">退出登录</a>&nbsp;|&nbsp;<a class="track" name="head-ghyh" href="/login_in" style="color: #a10000">更换用户</a></span>

                @endif
                <span style="display: @if(session('phone')) none @endif">
                  <a href="/login_in" name="hp-hp-head-signin-v:n" class="top track">登录</a>&nbsp;|&nbsp;
                  <a href="/login_in/create" name="hp-hp-head-register-v:n" class="track">注册</a>
                </span>
              </div>
              <div class="recommendArea">
                <a href="/dingdan" rel="nofollow" class="track" name="hp-hp-head-order-v:n">我的订单</a></div>
            </div>
            <span class="blank0"></span>
          </div>
        </div>
      </div>
      <!--顶部通栏广告位-->
 
      <div id="logoArea" class="vanclLogoSearch">

        <div class="vanclSearch fr">
              <div class="searchTab">
            <form action="/search" method="get">
                <div class="search fl">
                  <input type="text" class="searchText ac_input textBox Enter fl" name="keyword" id="skey" />
                  <input type="submit" value="" style="width:63px;height:27px;background: url('/index_static/images/sousuo.jpg') no-repeat;" />
            </form>
            <!-- 购物车的链接 -->
            <form action="/shopping" method="post" style="float:right;>
              {{csrf_field()}}
            <a href="/shopping" style="float:right;">

                  <p class="gouwuche" style="width:105px;height:27px;background: url('/index_static/images/gouwuche.bmp') no-repeat;"></p>
            </a>
            </form>

                </div>
              </div>
          <div class="hotWord">

          </div>
        </div>
      </div>
      <div class="navlist clear" id="mainNavBox" style="z-index:300!important;">
        <ul>
          <li class="vancllogo_Con" style="text-align: left;">
            <a href="/"></a>
          </li>
          <li>
            <a href="/">首页</a>
            <span class="NavLine"></span>
          </li>
        @foreach($date as $row) 
          <li>
            <a href="/list/{{$row->tid}}/edit" class="track" name="hp-hp-head-nav_1-v:n" target="_blank">{{$row->tname}}
              <em style="display:block;width:25px; height:13px; background:url() no-repeat scroll; position:absolute;left:67px;top:-5px;"></em></a>
            
            <span class="NavLine"></span>
            <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
              <span></span>

              <ul>
                @foreach($data[$row->tid] as $rows)
                <li>
                  <a href="/list/{{$rows->tid}}" class="track" name="hp-hp-head-nav_1-1-v:n" target="_blank">{{$rows->tname}}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </li>
        @endforeach
          
          
        </ul>
      </div>
    </div>
        <!-- content内容开始-------------------------------------- -->
    @section('content');

    @show

    <div class="blank0"></div>
    <div class="blank0" style="height:32px;"></div>
    <div class="vanclFoot" style="margin-top:0px;">
      <div class="vanclCustomer publicfooterclear">
        <ul>
          <li>
            <a href="" rel="nofollow">
              <p class="onlineCustomer">
                <img src="//i4.vanclimg.com/cms/20160802/onlinecustomer.png" style="width:auto;height:auto;"></p>
              <p class="onlineTime">7X9小时在线客服</p></a>
          </li>
          <li>
            <a href="" rel="nofollow" >
              <p class="seven">
                <img src="//i2.vanclimg.com/cms/20160802/seven.png" style="width:auto;height:auto;"></p>
              <p>7天内退货</p>
              <p>购物满199元免运费</p>
            </a>
          </li>
          <li class="twocode">
            <p>
              <img src="//i7.m.vancl.com/oms/2014_8_29_16_39_33_7709.jpg" style="width: 104px; height: 104px;"></p>
            <p>扫描下载
              <em>凡客</em>客户端</p></li>
        </ul>
      </div>
      <div class="vanclOthers publicfooterclear">
        <ul>
          <li>
            <a href="javascript:" target="_blank">关于凡客</a></li>
          <li>
            <a href="javascript:" target="_blank">新手指南</a></li>
          <li>
            <a href="javascript:" target="_blank">配送范围及时间</a></li>
          <li>
            <a href="javascript:" target="_blank">支付方式</a></li>
          <li>
            <a href="javascript:" target="_blank">售后服务</a></li>
          <li class="none">
            <a href="javascript:" target="_blank">帮助中心</a></li>
        </ul>
      </div>
    </div>
    <div id="footerArea" class="">
      <div class="footBottom">
        <div class="footBottomTab">
          <p>Copyright 2007 - 2018 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11011502002400号 出版物经营许可证新出发京批字第直110138号</p>
          <p>凡客诚品（北京）科技有限公司</p>
        </div>
      </div>
      <span class="blank20"></span>
      <div class="subFooter">
        <a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a>
        <span class="costumeOrg"></span>
        <a rel="nofollow" href="//www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a>
        <a rel="nofollow" href="//www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a>
        <a class="vanclqingNian" target="_blank" href="//www.vancl.com/help/about_2.htm" rel="nofollow"></a>
        <a href="//trust.cctvmall.cn/reg/templates/brandtem1010.html" style="display: inline-block;" target="_blank">
          <img style="width: 120px; height: 39px;" src="//i.vanclimg.com/other/kexin_brand_for_others.png" /></a>
        <div class="blank0"></div>
      </div>
    </div>
    <div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10">
      <ul>
        <li class="downApp">
          <a href="" target="_blank"></a>
        </li>
        <li class="online">
          <a href="" target="_blank"></a>
        </li>
        <li class="BlackTop">
          <a href="javascript:;" onclick="javascript:document.getElementById('headerTopArea').scrollIntoView()"></a>
        </li>
      </ul>
    </div>
    <!-- 下拉菜单js ------------------------- -->
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
      <!-- 下拉菜单结束------------------------------------------- -->

       <!-- 遮罩层------------------------------------------- -->
    <script language="javascript" type="text/javascript">$(document).ready(function() {
        //遮罩层
        var tipOverlay = $("#overlay");
        if (tipOverlay.length > 0) {
          $("span.screenAdClose", tipOverlay).click(function() {
            closeTipOverlay();
          });
          window.setTimeout(function() {
            closeTipOverlay();
          },
          10000);
        }

        var setting = {
          closeTipOverlay: false
        };
        var closeTipOverlay = function() {
          tipOverlay.fadeOut();
          //-------vjia浮窗
          if (setting.closeTipOverlay == false && VANCL.www.VjiaFloatad != undefined) {
            setting.closeTipOverlay = true;
            VANCL.www.VjiaFloatad.init();
          }
        }
      });</script>
</body>
</html>


