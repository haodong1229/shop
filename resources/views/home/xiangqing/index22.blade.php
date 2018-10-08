  @extends('home.public.public')
  @section('title','商品详情')
  @section('content')



<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
    
<title></title>
<meta name="description" content="，VANCL凡客诚品网上购物、送货上门、货到付款，无条件退换货。"/>
<link rel="shortcut icon" href="//i.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon" />
    <link href="/static/xiangqing/css/css.css"
        type="text/css" rel="stylesheet" />
    <style type="text/css">.SpriteColors{background-image: url(/static/xiangqing/images/joinimages.ashx); width:36px; height:36px; display:inline-block;float:left;}</style>

    <link href="/static/xiangqing/css/css_1.css"
        type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/static/xiangqing/js/js.js"></script>
<title>

</title></head>
<body id="main" class="cols_manage full">

  
    <div class="danpinBox">
        <input id="CustomerMade" type="hidden" value="NoMade" />
        <a name="top"></a><span class="blank10"></span>
        
        

        
        <span class="blank0"></span>
        <div class="danpinArea">
            <div id="ProductTitleShow" class="danpinTitleTab newclear">
                

<style type="text/css">
    #ProductTitleShow #productTitle .brandNumArea
    {
        display: none;
    }
    #winSelector{
        width:100px;
        height:100px;
        background-image:url(./image/bg.png);
        position:absolute;
        left:0px;
        top:0px;
        display:none;
    }
        #big{
        width:400px;
        height:400px;
        position:absolute;
        left:600px;
        top:280px;
        overflow:hidden;
        display:none;
        z-index:1;
    }
    #bigimg{
        position:absolute;
        left:0px;
        top:0px;
    }
</style>
<div id="productTitle">
    <div class="brandNumArea">
        <span id="productcode">商品编号:6379528</span></div>
 
    <h2 title="{{$wo->gname}}">
        
        
        
        {{$wo->gname}}
        <span style="margin-left: 10px; font-size: 14px; font-weight: bold; color: #a10000;">
            充值购买更优惠</span>
        </h2>

    <ul class="ProductSubnav fr" id="ItemTag">
        
        <li><a href="#anchorPinglun">评论</a>|</li>
        <li><a href="#anchorQuiz">提问</a></li>
    </ul>
</div>

            </div>
            <span class="blank30"></span>
            <div class="blank0">
            </div>
            <div class="danpin_colLef">
                
<div class="danpinLeft">
    <div class="smallImg">
        <div class="smallImgUp upper" style='visibility: hidden'>
        </div>
       
        <div class="smallImgDown downer" style='visibility: hidden'>
        </div>
    </div>
</div>

<div class="danpinColCenter">
    <div class="bigImg" id="vertical">
        
        <img id="midimg" src="{{$wo->gpic}}" title="凡客衬衫 吉国武 免烫 小方领 短袖4.0" />
        <div id="winSelector" style="left: 0px; top: 0px; display: none;">
        </div>
        
    </div>
    <div id="big" style="width:400px;
        height:400px; background:red;">
        
        <img src="{{$wo->gpic}}" id="bigimg">
    </div>
    
</div>

     
            </div>
            <div id="danpinRight" class="danpinRight" style="top: 0px">
                 
                <div class="danpinfixedtitle">

                    <h4 class="fl">
                        加入购物车
                    </h4>
                    <span class="close1 fr"></span>
                </div>

                <div class="danpinFixedLeftContent">
                    <img id="danpinFixedLeftContentImg" src="/static/xiangqing/picture/6379528-1j201805181625527157.jpg" title=""
                        alt="" />
                </div>
                <div class="danpinFixedRightContent">
                    <div name="Normal" id="pricearea">
                        

<input id="shopid" type="hidden" value="10258" />
<input id="hidattr" type="hidden" value="0" />
<span class="blank10"></span>

<style type="text/css">
    .priceLayout
    {
        color: Black !important;
        
    }
    .priceLayout1
    {
        position: relative;
        top: 1px;
        margin-right: -5px;
        margin-left: -5px;
        *margin-right: 0px !important;
        *margin-left: 0px !important;
    }
    .priceLayout2
    {
        position: relative;
        top: 2px;
    }
    
    .tehuipricelayout
    {
        *position: relative; 
        *top: 13px;
    }
    .tehuipricelayout1
    {
        *position: relative; 
        *top: 14px;
    }
    .tehuipricelayout2
    {
        *top: -1px;
    }
</style>
<input id="hidyue" type="hidden" value="False" />
<input id="Hidden1" type="hidden" value="False" />
<div class="cuxiaoPrice ">
   
     <span class="tehuiMoney" style="line-height: 26px;">
        
        <span>
            特惠价：</span><span style="font-family: '微软雅黑';">￥<strong>{{$wo->price}}</strong></span>
            
            


    </span>
    
                  
                <a id="czwenan" href="http://cz.vancl.com/DepositPre.aspx" target="_blank" style="float: left;
                                    height: 26px; display: inline-block; margin-left: 20px; line-height: 26px; margin-top: 7px;
                                    color: #a10000;">充100返100，点击充值</a>
              


    
    
</div>
<span class="blank10"></span>





<script language="javascript">
    $("document").ready(function () {
        $.ajax({
            type: "get",
            async: false,
            url: "http://recom-s.vancl.com/RechargeCz/getRechargeCzInfo",
            cache: false,
            dataType: "jsonp",
            jsonp: "callback",
            success: function (data) {
                $("#czwenan").html("");
                $("#czwenan").html(data.OtherPage);
            },
            error: function (e) {
            }
        });
    });
</script>
                    </div>
                    <div class="selectArea">
                        <div class="selColorArea">
                            <span class="blank10"></span>
                            
<a id="colorlist"></a>
<div class="danpinColor_Select" >
   
    <div class="selColor">
       
    </div>
</div>

                            <div class="selSizeArea">
                                




                            </div>
                            <div class="blank8ie">
                            </div>
                            

<div class="goodsNum">
    <div class="danpinColorTitle" style="line-height: 18px;">
        <p>
            数量：</p>
    </div>

    <div class="danpinnumSelect">
    <form action="/shopping" method="post">
        <select id="selectedAmount" name="op">
            
            <option value='1'>
                1</option>
            
            <option value="2">
                2</option>
            
            <option value="3">
                3</option>
            
            <option value="4">
                4</option>
            
            <option value="5">
                5</option>
            
            <option value="6">
                6</option>
            
            <option value="7">
                7</option>
            
            <option value="8">
                8</option>
            
            <option value="9">
                9</option>
            
            <option value="10">
                10</option>
            
        </select>
       
        <span id="comeon" class="LastNum">余量有限</span> <span class="blank15"></span>
    </div>
</div>
<span class="blank0"></span>
<div class="AreaItotal SelectGoods">
    <div class="SelectAreaItotal SelectGoods">
        <div class="goodsAddArea SelectGoods">
            
           
        </div>
    </div>
</div>


<style type="text/css">
    .lijidingzhiG
    {
        background: #B4B4B4;
        width: 166px;
        height: 40px;
        display: block;
        float: left;
        margin-right: 13px;
        border: solid 1px #675D5D;
        text-align: center;
        line-height: 40px;
    }
    .lijidingzhiG span
    {
        display: block;
            font-size: 20px;
            font-weight: bold;
            color: white;}
    .lijidingzhiR
    {
        background: #A50309;
        width: 166px;
        height: 40px;
        display: block;
        float: left;
        margin-right: 13px;
        line-height: 40px;
        border: solid 1px rgb(183, 27, 33);
        text-align: center;
        }
        .lijidingzhiR span
        {
            display: block;
            font-size: 20px;
            font-weight: bold;
            color: white;
}
          }
</style>
<input type="hidden" name="gid" value="{{$wo->gid}}">
<div class="shoppingNews">
   {{csrf_field()}}
    <button id="nowbuy" name="" 
        class="btnnowbuy track "><span>加入购物车</span></button>
 {{session('error')}}
</div>
</form>


                            <span class="blank20"></span>
                        </div>
                        <div class="blank0">
                        </div>
                    </div>
                    <div id="promotion">
                        

<div class="danpin_YhTsBox danpin_YhTsTab ">
    <h4>
        <span>优惠提示</span></h4>
    <ul>
        
        <li style="background: none; padding-left: 0;"><span style="display: block; float: left;
            width: auto; height: 16px; background: #b81c22; margin: 4px 5px 0  0; color: #fff;
            line-height: 16px; text-align: center; padding: 0 5px;">
            免邮
            
        </span>
            全场购物满199元免运费 
            </li>
        
    </ul>
</div>


                    </div>
                    <div class="blank15">
                    </div>
                </div>
                
            </div>
        </div>
        <script type="text/JavaScript" src="/static/xiangqing/js/js.js"></script>
        
        <div id="reshouMainH">
            
        </div>
        <input id="hdCategoryCode" type="hidden" value="1334" />
        
        <span class="blank20"></span>
        <div class="sideBarSettabArea">
            
            <div class="RsetTabArea">
                <div id="product_set">
                    
                </div>
                
                

<div id="floatposition"></div>




                <span class="blank8"></span>
                


<div class="itemtagcontentpart">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><script type="text/javascript">stuHover = function() {
var cssRule;
var newSelector;
for (var i = 0; i < document.styleSheets.length; i++)
   for (var x = 0; x < document.styleSheets[i].rules.length ; x++)
    {
    cssRule = document.styleSheets[i].rules[x];
    if (cssRule.selectorText.indexOf("LI:hover") != -1)
    {
     newSelector = cssRule.selectorText.replace(/LI:hover/gi, "LI.iehover");
     document.styleSheets[i].addRule(newSelector , cssRule.style.cssText);
    }
   }
var getElm = document.getElementById("w_nav").getElementsByTagName("LI");
for (var i=0; i<getElm.length; i++) {
   getElm[i].onmouseover=function() {
    this.className+=" iehover";
   }
   getElm[i].onmouseout=function() {
    this.className=this.className.replace(new RegExp(" iehover\\b"), "");
   }
}
}
if (window.attachEvent) window.attachEvent("onload", stuHover);
</script><script type="text/javascript">$(function() {
   $('img[original]', '.productList').each(function(i){
      this.src = $(this).attr("original");
    });
});</script><script type="text/javascript">var isIE6 = $.browser.msie && $.browser.version < 7;
           
            (function ($) {
                $.fn.decorateIframe = function (options) {
                    if (isIE6) {
                        var opts = $.extend({}, $.fn.decorateIframe.defaults, options);
                        $(this).each(function () {
                            var $myThis = $(this);
                            var divIframe = $("<iframe src='javascript:void(0);' ></iframe>");
                            divIframe.attr("id", opts.iframeId);
                            divIframe.css({ "position": "absolute", "display": "block", "z-index": opts.iframeZIndex, "top": 0, "left": 0 });
                            if (opts.width == 0) {
                                divIframe.css("width", $myThis.width() + parseInt($myThis.css("padding")) * 2 + "px");
                            }
                            if (opts.height == 0) {
                                divIframe.css("height", $myThis.height() + parseInt($myThis.css("padding")) * 2 + "px");
                            }
                            divIframe.css("filter", "mask(color=#fff)");
                            $myThis.append(divIframe);
                        });
                    }
                };
                $.fn.decorateIframe.defaults = {
                    iframeId: "decorateIframe1",
                    iframeZIndex: -1,
                    width: 0,
                    height: 0
                };
            })(jQuery);
            (function ($) {
                $.fn.popwindow = function (cssOptions) {
                    var cssOptions = $.extend({}, cssOptions);
                    if (this.context) {
                        $(this).click(function () {
                            open(this);
                            return false;
                        });
                    } else {
                        open(null);
                    }
                    function open(e) {
                        html = [];
                        html.push();
                        html.push("<div id=\"Overlay\">");
                        if (cssOptions.title) {
                            html.push("<div class=\"KmainBox\">");
                            html.push("<h2 class=\"msgboxhead\">");
                            html.push("    <span>" + cssOptions.title + "</span> ");
                            html.push("   <a href=\"#\" class=\"close\"><img original=\"https://ssl.vanclimg.com/Others/2011/2/15/dpbox_06.gif\" /></a></h2>");
                        }
                        html.push("    <iframe id=\"LoadedContent\" width='100%' height='100%' frameborder=\"0\" src='javascript:void(0);'></iframe>");
                        if (cssOptions.title) {
                         
                            html.push("</div>");
                        }
                     
                        html.push("</div>");
                     
                        $("body").prepend(html.join(""));
                        if (!cssOptions.noOverlayClose) {
                            $("#Overlay").click(function () { $(this).remove(); });
                        }
                        $("#Overlay").decorateIframe();
                        var $LoadedContent = $("#LoadedContent");
                        var url = "";
                        if (cssOptions.href) {
                            url = cssOptions.href;
                        } else {
                            url = $(e).attr("href");
                        }
                        $LoadedContent.attr("src", url);
                        $("#Overlay").children().eq(0).css(cssOptions);
                        windowresize();
                        $("#Overlay .close").click(function () {
                            $("#Overlay").fadeOut().remove();
                            return false;
                        });
                    }
                };
                $.fn.popwindow.close = function () {
                    $("#Overlay").fadeOut().remove();
                };
                $.fn.popwindow.resize = function (css) {
                    $("#LoadedContent").css(css);
                };
                function windowresize() {
                    var $LoadedContent = $("#LoadedContent");
                    if (isIE6) {
                        $("body").css("position", "static");
                        try {
                            $("#Overlay").css({
                                position: "absolute",
                                width: $(window).width(),
                                height: $(window).height(),
                                top: $(window).scrollTop()
                            });
                            $(window).scroll(function () {
                                $("#Overlay").css({ top: $(window).scrollTop() });
                            });
                        }
                        catch (error) {
                            $("#Overlay").css({
                                position: "absolute",
                                width: $(window).width(),
                                height: $(window).height(),
                                top: document.documentElement.scrollTop || document.body.scrollTop
                            });
                            $(window).scroll(function () {
                                $("#Overlay").css({ top: document.documentElement.scrollTop || document.body.scrollTop });
                            });
                        }
                    }
                    else {
                        $("#Overlay").css({ position: "fixed" });
                    }
                    var position = {
                        marginLeft: ($(window).width() - $LoadedContent.width()) / 2,
                        marginTop: ($(window).height() - $LoadedContent.height()) / 2
                    };
                    if (window.opera != undefined) {
                        position.marginLeft = (window.innerWidth - $LoadedContent.width()) / 2;
                        position.marginTop = bodyTop + (window.innerHeight - $LoadedContent.height()) / 2;
                    }
                    $("#Overlay").children().eq(0).css(position);
                };
                $(window).resize(windowresize);
            })(jQuery);</script><script type="text/javascript">$(document).ready(function () {
		$('#alinkVideo3').click(function () {
			$.fn.popwindow({ href: 'http://player.youku.com/player.php/sid/XMTM1NjQ0MjUzNg==/v.swf', width: 560, height: 400, title: "  ", noOverlayClose: true });
		})             
	});</script><style type="text/css">.ztAutoTemplate {
	width: 1200px;
}
.productList li img {
	border: none;
}
/* dh */
.nautilus_subnav {
	width: 1200px;
	height: 50px;
	border-bottom: 1px solid #c7c7c7;
	margin: 0px auto 25px;
}
.nautilus_subnav ul {
	float: left;
}
.nautilus_subnav ul li {
	float: left;
	margin-right: 85px;
	font-size: 14px;
	line-height: 50px;
}
.nautilus_subnav ul li a:link, .nautilus_subnav ul li a:visited {
	color: #676767;
}
.nautilus_subnav ul li a:hover {
	color: #414141;
}
.nautilus_subnav .vanclcon {
	float: right;
}
.nautilus_subnav .vanclcon, .nautilus_subnav .vanclcon a {
	display: block;
	width: 75px;
	height: 50px;
}
.nautilus_subnav_two {
	border-top: 1px solid #c7c7c7;
}
.nautilus_subnav_two ul li {
	margin: 0px 110px 0px 20px;
}
.nautilus_subnav_two ul li.none {
	margin: 0px 0px 0px 20px;
}
/* productlist */
.productList {
	width: 1200px;
	height: auto;
	margin: 0px auto;
}
.productList ul li {
	float: left;
	width: 283px;
	height: 530px;
	margin: 0px 22px 0px 0px;
	display: inline;
}
.productList ul li.none {
	margin: 0px;
}
.productList ul li h3, .productList ul li span {
	font-size: 18px;
	color: #414141;
	font-family: "Microsoft Yahei";
	line-height: 22px;
}
.productList ul li h3 {
	margin: 15px 0px 8px 0px;
}
.productList ul li span {
	display: block;
}
.productList ul li img {
	display: block;
}
.productList ul li .picb {
	display: none;
}
.productList ul li:hover .pica {
	display: none;
}
.productList ul li:hover .picb {
	display: block;
}
.full .productList ul li {
	margin: 0px 22px 0px 0px;
}
.full .productList ul li.none {
	margin: 0px;
}
/* tab */

.danpinTitleTab ul.ProductSubnav li a {
	font-family: 微软雅黑;
	color: #000;
	font-weight: bold;
	font-size: 15px;
}
/* mask */
.mask_subtab {
	width: 1200px;
	height: 300px;
	margin: 0px auto;
}
.mask_subtab ul li {
	float: left;
	position: relative;
	margin: 0px 25px 47px 80px;
	display: inline;
}
.mask_subtab ul li .maskBox {
	width: 468px;
	height: 127px;
	background: #151515;
	opacity: 0.3;
	filter: alpha(opacity=30);
	position: absolute;
	left: 0px;
	top: 0px;
	display: none;
}
.mask_subtab ul li .maskBox a {
	width: 468px;
	height: 127px;
	display: block;
}
.mask_subtab ul li:hover .maskBox {
	display: block;
}
/* shipin */
.shipinLdf {
	width: 1200px;
	height: 79px;
	background: url(/static/xiangqing/images/ldf_11.jpg) no-repeat scroll 0px 0px;
}
.shipinLdf a {
	display: block;
	width: 183px;
	height: 34px;
	margin: 12px 0px 0px 508px;
}
.KmainBox {
	background-clip: padding-box;
	background-color: #FFFFFF;
	border-radius: 6px;
	box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
	outline: medium none;
	width: 530px;
	z-index: 1050;
	height: 400px
}
#Overlay {
	left: 0;
	overflow: hidden;
	top: 0;
	z-index: 9999;
	cursor: pointer;
	height: 100%;
	width: 100%;
}
.close {
	background-image: url("/static/xiangqing/images/lightbox.png");
	background-position: -160px 50%;
	background-repeat: no-repeat;
	cursor: pointer;
	height: 42px;
	outline: medium none;
	overflow: hidden;
	position: absolute;
	right: -2px;
	text-indent: -9999em;
	top: -42px;
	width: 42px;
}
.msgboxhead {
	max-height: 400px;
	padding: 0px;
	position: relative;
}</style>
 

                            </div>
                            <div class="productQuiz fr">
                                
<span class="blank20"></span>

<!-- 评价和提问开始-------------------------------------------- -->

<div class="area3 root" name="64">
    
    
</div>

<!-- 评价和提问结束-------------------------------------------- -->

<span class="blank10"></span><a name="1"></a>
<div class="Askquestion" style="display: none;">
    <h3>
        <p>
            <span></span>凡客衬衫 吉国武 免烫 小方领 短袖4.0 白色</p>
    </h3>
    <input type="hidden" id="title" value="凡客衬衫 吉国武 免烫 小方领 短袖4.0 白色" />
    <dl class="questionStyle">
        <dt>提问类型：</dt>
        <dd>
            <ul id="quiztype">
                <li>
                    <input type="radio" value="0" name="questionType" /><span>商品提问</span></li>
                <li>
                    <input type="radio" value="1" name="questionType" /><span>促销活动提问</span></li>
                <li>
                    <input type="radio" value="2" name="questionType" /><span>库存及物流提问</span></li>
                <li>
                    <input type="radio" value="3" name="questionType" /><span>售后提问</span></li>
            </ul>
            <p style="display: none" id="qtype">
                <strong></strong><span>请选择问题分类</span></p>
        </dd>
        <span class="blank0"></span>
    </dl>
    <dl>
        <dt>提问内容：</dt>
        <dd>
            <textarea class="Askcontent" id="content"></textarea>
            <input type="button" class="askSubBtn" id="tijiao" />
        </dd>
        <span class="blank0"></span>
    </dl>
</div>

                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
    
<div id="bigView" style="display: none; z-index: 10">
    <img /></div>
<div style="display: none;" id="loading">
</div>
<div class="collectbox" id="collectbox" style="display: none">
    <div class="cltboxcon">
        <div id="collectboxloaging">
        </div>
        <div class="collectcontent">
            <div class="msgcltdetail">
                <h2 class="msgboxhead2" style="float: right; width: 40px;">
                    <a href="#" class="track close" name="item-close-cart"><span class="sprites" style="width: 11px;
                        height: 11px; background-position: -519px 0; margin-top: 5px; cursor: pointer"></span>
                        <span>关闭</span></a></h2>
                <div class="CltTitleDiv">
                    <div class="sprites" style="width: 59px; height: 33px; background-position: -945px 0;
                        float: left; margin-top: 10px;">
                    </div>
                    <span class="msgCltTitle">该商品已成功放入收藏夹&nbsp;<a href="//my.vancl.com/favorite" target="_blank">查看收藏夹&gt;&gt;</a></span>
                </div>
                <div class="tiinfof">
                    您还可以通过<span><a href="#" class="addmark">添加标签</a></span>为商品分类，或添加邮箱订制<span><a href="#"
                        class="addsubscribe">余量通知</a></span></div>
                <div class="infoCON">
                    <ul>
                        <li>
                            <div class="inCti addmark">
                                <span class="inCti_img02"></span>收藏标签</div>
                            <div class="fonttext">
                                <span class="blank10"></span>标 签：<input type="text" class="icte" id="bq" maxlength="24" /><span>标签最多3个，用“，”隔开</span><br>
                                <div class="tishi">
                                    <span></span>请输入中英文、数字或下划线！</div>
                                <div id="commonmarks" style="margin-top: 6px">
                                    常用标签：<label><input type="checkbox" class="input">日韩女装</label>
                                    <label>
                                        <input type="checkbox" class="input">裤子</label>
                                    <label>
                                        <input type="checkbox" class="input">牛仔裤</label></div>
                                <br>
                                <div class="button">
                                    <input type="submit" value="确定" class="submitdiv"><a href="#" class="addmark">取消</a><div
                                        class="baocun">
                                        保存成功！</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="inCti addsubscribe">
                                <span class="inCti_img02"></span>余量通知</div>
                            <div class="fonttext">
                                <span class="blank10"></span>邮 箱：<input type="text" class="icte" id="email" /><br>
                                <div class="tishi">
                                </div>
                                <br>
                                <div class="button">
                                    <input type="submit" value="确定" class="submitdiv"><a href="#" class="addsubscribe">取消</a><div
                                        class="baocun">
                                        保存成功！</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <span class="blank5"></span>
            </div>
            <div class="gmlist">
            </div>
        </div>
        <span class="blank5"></span>
    </div>
    <div class="rightborder2">
    </div>
    <span class="blank0"></span>
    <div class="bottomborder">
    </div>
</div>
<div id="surveyID" style="width: 40px; padding: 0; position: fixed; bottom: 110px;
    _position: absolute; _top: expression(documentElement.scrollTop + 200 + 'px');
    right: 0; border: 1px #CCC; border-right: none; border-radius: 4px; -moz-border-radius: 4px;
    -webkit-border-radius: 4px; border-right-radius: none; -moz-border-radius-bottomright: 0;
    -moz-border-radius-topright: 0; text-align: center; background-color: white;
    z-index: 999; display: none;">
    
    <a target="_blank" href="//catalog.vancl.com/dzzz/magazine_091207.html">
        <div class="sprites spritesDg">
        </div>
    </a>
</div>
<style type="text/css">
    .CarBox_MainDragDrop
    {
        cursor: pointer;
    }
</style>
<div class="CarBox_Main CarBox_MainDragDrop" id="carbox" style="display: none">
    <div id="carboxloading">
    </div>
    <div style="display: none">
        <h2 class="CarBox_Title">
            <span>商品成功放入购物车</span><span class="close1 fr"></span>
            </h2>
        <span class="blank20"></span>
        <div class="CarBox_Content">
            <div class="CarBox_bg">
            </div>
            <div class="CarBox_NumPrice">
                <span class="line01 fl"></span>
                <div class="fl" style="padding-top: 14px;">
                    <p>
                        <span>共有</span><span id="shopcarcount">100</span><span>件商品</span>
                    </p>
                    <p>
                        <span class="CarBox_TotialPrice"><span>总计</span><span id="shopcarprice">￥10000.00</span>
                        </span>
                    </p>
                </div>
            </div>
            <div class="CarBox_Btn">
                <div class="CarBox_goCar">
                    <a class="track" name="item-Settlement" href="http://shopping.vancl.com/mycart" rel="nofollow"
                        target="_parent">去购物车&gt;&gt;</a></div>
                <div id="continueshop" class="CarBox_nowCheckout CarBox_nowContinueBuy jxgwbtn">
                    <a href="#" class="track" name="item-continueshop">&lt;&lt;继续购物</a></div>
            </div>
            <span class="blank5"></span>
        </div>
        <div class="CarBox_ProductList">
        </div>
    </div>
</div>
<div class="CarBox_Main" id="customizeurl" style="display: none; width: 955px; height: 633px;
    overflow: hidden">
    <div>
        <h2 class="CarBox_Title" style="width: 955px;">
            <span>我要定制</span><a href="javascript:void(0)" name="item-close-customize" class="track close"><em></em>关闭</a></h2>
        <iframe style="width: 955px; height: 630px; border: 0px none; overflow: hidden" scrolling="no"
            id="customizeurlsrc"></iframe>
    </div>
</div>


</body>
<script type="text/javascript">
  //获取div元素对象
    vertical=document.getElementById("vertical");
    midimg=document.getElementById("midimg");
    winSelector=document.getElementById("winSelector");
    big=document.getElementById("big");
    bigimg=document.getElementById("bigimg");

vertical.onmousemove=function(e){
    //显示左边move和右边div
   winSelector.style.display="block";

    //鼠标样式
    winSelector.style.cursor="move";
    big.style.display="block";


    ee=e||window.event;
    //获取鼠标位置坐标
    x=ee.pageX;
    y=ee.pageY;
    //获取xx和YY
    xx=vertical.offsetLeft;
    yy=vertical.offsetTop;
    //获取l和t
    l=x-xx-winSelector.offsetWidth/2;
    t=y-yy-winSelector.offsetHeight/2;
    //取范围
    // 上边框
    if(t<0){
        t=0;
    }
    //左
    if(l<0){
        l=0;
    }
    //右
    if(l>vertical.offsetWidth-winSelector.offsetWidth){
        l=vertical.offsetWidth-winSelector.offsetWidth;
    }
    //下
    if(t>vertical.offsetHeight-winSelector.offsetHeight){
        t=vertical.offsetHeight-winSelector.offsetHeight;
    }

    // 把l和t赋值给winSelector(小方块)
    winSelector.style.left=l+"px";
    winSelector.style.top=t+'px';

    //获取左边比例
    s_x=l/vertical.offsetWidth;
    s_y=t/vertical.offsetHeight;
    b_l=s_x*bigimg.offsetWidth;
    b_t=s_y*bigimg.offsetHeight;
    //给大图left和top赋值
    bigimg.style.left=-b_l+"px";
    bigimg.style.top=-b_t+"px";
    //获取右边比例
    b_x=big.offsetWidth/bigimg.offsetWidth;
    b_y=big.offsetHeight/bigimg.offsetHeight;
    newm_w=b_x*vertical.offsetWidth;
    newm_h=b_y*vertical.offsetHeight;

    //重新给winSelector 赋值 width hieght
    winSelector.style.width=newm_w+"px";
    winSelector.style.height=newm_h+"px";  
    // 移出

}
vertical.onmouseout=function(){
    //winSelector和big隐藏
    // alert('hhh');
    winSelector.style.display="none";
    big.style.display="none";
}  

</script>
</html>



  @endsection