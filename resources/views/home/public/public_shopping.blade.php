<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="zh-CN" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>@yield('title')</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="Stylesheet" type="text/css" charset="utf-8" href="/shopping_static/css/css_4.css" />
        <script type="text/javascript" charset="utf-8" src="/shopping_static/js/js_1.js"></script>
         <script type="text/javascript" charset="utf-8" src="/shopping_static/js/jquery-1.8.3.min.js"></script>
        <!--[if IE 6]>
        <script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script>
        <![endif]-->
        <script type="text/javascript">
            var staticResourcePath = { "img": "http://i.vanclimg.com/", "sslimg": "https://ssl.vanclimg.com/" };
            var staticSitePath ={"isOpened":"false","checkOut":"https://shopping.vancl.com/checkout"};
        </script>
        
    <link rel="stylesheet" type="text/css" charset="utf-8" href="/shopping_static/css/css_5.css" />

    </head>
    <body class="mycart">
        <div class="shade"></div>
        <div id="wrapper">
            <div id="header" class="clearfix">
                    <a class="logo" href="http://www.vancl.com/" title="凡客诚品" target="_blank">
                        <img alt="凡客诚品"  src ="/shopping_static/picture/vancl-logo_1.png" />
                    </a>
                    <div class="help-center">
                        <a href="http://help.vancl.com/" target="_blank">帮助中心</a>
                    </div>
                    <div class="account">
                            <p>您好,{{session('phone')}}<a class="logout" href="login_in">退出登录</a>|<a class="switch" href="login_in">更换用户</a></p>

                    </div>
            </div>
            <div id="location">
            
               
    <em>1.我的购物车</em> <span>2.填写核对信息单</span> <span>3.成功提交订单</span>

            </div>

            @section('mail')
            @show
            <div id="content">
               

 <div id="footer">
                    <p class="copyrights">Copyright 2007 - 2018 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
                    <p class="certs">
                        <a class="ectrustprc" title="中国电子商务诚信单位" href="http://www.ectrustprc.org.cn/seal/splash/1000020.htm" target="_blank">
                            <img alt="中国电子商务诚信单位" src="/shopping_static/picture/cert-redlogo_1.gif" />
                        </a>
                        <span class="costumeorg" title="中国服装协会会员单位">
                            <img alt="中国服装协会会员单位" src="/shopping_static/picture/cert-costumeorg_1.gif" />
                        </span>
                        <a class="online315" href="http://www.315online.com.cn/member/315090053.html" title="网上交易保障中心" target="_blank">
                            <img alt="网上交易保障中心" src="/shopping_static/picture/cert-wsjybzzx_1.gif" />
                        </a>
                    </p>
            </div>
        </div>       
        
    <script type="text/javascript" src="/shopping_static/js/js_1.js"></script>
    <script type="text/javascript" src="/shopping_static/js/js_1.js"></script>
    <script type="text/javascript" src="/shopping_static/js/js_1.js"></script>
    <script type="text/javascript">
        var google_conversion_id = 1045274787;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "666666";
        var google_conversion_label = "VFEPCI3L4QEQo8G28gM";
        var google_conversion_value = 0;
    </script>
    <script type="text/javascript" src="/shopping_static/js/js_1.js"></script>
    <noscript>
        <div style="display: inline;"><img height="1" width="1" style="border-style: none;" alt="" src="/shopping_static/picture/b2228e5da6724047b4859e22cbf7292d.gif" /></div>
    </noscript>
    <iframe style="display:none" src="../../MediaV.htm"></iframe>
    <iframe id="vizury" style="display:none" src="http://page.vanclimg.com/mediav/vizuryiframe.htm"></iframe>
    <iframe id="MediaV" style="display:none" src=""></iframe> 
    <iframe style="display: none" src="http://page.vanclimg.com/dsp/iframe.html?from=shopping&pagetype=shopping"></iframe>

        <script type="text/javascript" src="/shopping_static/js/js_1.js"></script>
	
    </body>
</html>