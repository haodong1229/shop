  @extends('home.public.public');
  @section('title','凡客VANCL-互联网快时尚品牌,服装,鞋,配饰,网上购物货到付款网站,7天无条件退货')
  @section('content')
  <link rel="stylesheet" type="text/css" rel="stylesheet" charset="utf-8" href="/index_static/css/css_1.css">

 <div id="content" class="vanclContent vanclCon">
      <style type="text/css">.foucsTab .prev, .foucsTab .next { cursor: pointer; height: 60px; width: 28px; z-index: 10; text-indent: -9999px; display: inline-block; } .foucsTab .prev { background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll 0px 0px; left: 10px; position: absolute; top: 230px; } .foucsTab .prev:hover { background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll 0px -61px; } .foucsTab .next { background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll -52px 0px; position: absolute; right: 10px; top: 230px; } .foucsTab .next:hover { background: url(http://i3.vanclimg.com/cms/20160918/focus_lr0918.png) no-repeat scroll -52px -61px; }</style>
      <div class="vanclFocusAd ">
        <div style="width: 100%; height: 2px;"></div>
        <div class="vanclFocus ">
          <div class="foucsTab">

            <!-- 轮播图开始------------------------------- -->
            <ul id="slider" class="rslides rslides1">
              @foreach($lun as $l)
              <li data-focusflag="other1" style="background: url({{$l->img}}) no-repeat scroll center 0px;">
                <a t href="javascript:(0)" class="track" name="hp-hp-focus-1_1-v:n" ></a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <script language="javascript" type="text/javascript">function seckill_timecounter() {
          var _starttime, _endtime;

          function init() {

            $.ajax({
              type: "get",
              async: false,
              url: "http://recom-s.vancl.com/CmsSeckill/GetMainIndexSeckillForWww",
              cache: false,
              dataType: "jsonp",
              data: {
                showNum: 5
              },
              jsonp: "callback",
              success: function(data) {
                if (data == undefined || data == null || data.data == undefined || data.data == null) {
                  return;
                }

                $('.new_miaosha_area').css('display', 'block');
                $('#seckill_2017_container').css('display', 'block');
                //$('#seckill_2017_container').html(data);
                _starttime = seckill_getdatetime(data.data.startTime);
                _endtime = seckill_getdatetime(data.data.endTime);

                seckill_2017_timecounter();

                var UrlSecKill = "http://recom-s.vancl.com/product/GetProductInfosBySeckill";
                var _data = "productcodes=" + data.data.productCodes;
                $.ajax({
                  type: "get",
                  async: false,
                  data: _data,
                  url: UrlSecKill,
                  cache: false,
                  dataType: "jsonp",
                  jsonp: "callback",
                  success: function(products) {
                    var elems = $('#seckill_2017_container ul li');

                    for (var i = 0; i < 5; i++) {
                      var elem = $(elems[i]); //只有5个；

                      var product = products[i];
                      var _p1 = product.ProductCode.substring(0, 1);
                      var _p2 = product.ProductCode.substring(1, 2);
                      var _p3 = product.ProductCode.substring(2, 3);
                      var _photo = "http://p3.vanclimg.com/232/232/product/" + _p1 + "/" + _p2 + "/" + _p3 + "/" + product.ProductCode + "/mid/" + product.Photos[0].FileName;
                      var _url = product.ItemUrl;

                      elem.find('a').attr('href', _url);
                      elem.find('img').attr('src', _photo);

                      elem.find('.new-miaosha-productname span').html(product.ProductName);
                      elem.find('.new-miaosha-oldprice em').html(product.Price);
                      elem.find('.new-miaosha-saleprice em').html(product.SPrice);

                      var deposit = parseInt(product.SPrice) / 2;

                      elem.find('.new-miaosha-afterdeposit em').html(deposit);
                    }
                  },
                  error: function(e) {}
                });

              },
              error: function(e) {

}
            });
          }

          function seckill_getdatetime(datestr) {
            var arr = datestr.split(' ');
            var date = arr[0];
            var time = arr[1];
            var dateArr = date.split('-');
            var y = dateArr[0];
            var mm = dateArr[1];
            var d = dateArr[2];

            var timeArr = time.split(':');
            var h = timeArr[0];
            var m = timeArr[1];
            var s = timeArr[2];

            return new Date(y, mm - 1, d, h, m, s);
          }

          function seckill_2017_timecounter() {
            var _seckill_starttime = _starttime; //seckill_getdatetime("2017-9-27 15:00:00");  //秒杀开始时间
            var _seckill_endtime = _endtime; // seckill_getdatetime("2017-9-27 16:00:00");   //秒杀结束时间

            //获取当前时间
            var date = new Date();
            var now = date.getTime();
            //设置截止时间
            var starttime = _seckill_starttime.getTime();
            var endtime = _seckill_endtime.getTime();
            var _times;
            var counttime;
            if (now < starttime) {
              //秒杀还没有开始
              _times = "秒杀即将开始，距开始还有";
              counttime = starttime;
            } else if (now >= starttime && now < endtime) {
              //秒杀中
              counttime = endtime;
              _times = "秒杀进行中，距结束还有"
            } else {
              //秒杀结束
              _times = "该场秒杀已结束";
            }
            //时间差
            if (counttime) {
              var leftTime = counttime - now;
              //定义变量 d,h,m,s保存倒计时的时间
              var d, h, m, s;
              if (leftTime >= 0) {
                d = Math.floor(leftTime / 1000 / 60 / 60 / 24);
                h = Math.floor(leftTime / 1000 / 60 / 60 % 24);
                m = Math.floor(leftTime / 1000 / 60 % 60);
                s = Math.floor(leftTime / 1000 % 60);
                if (h < 10) {
                  h = "0" + h;
                }

                if (m < 10) {
                  m = "0" + m;
                }

                if (s < 10) {
                  s = "0" + s;
                }
                _times = "<em class='wordBox'>" + _times + "</em>" + h + "<em></em>" + m + "<em></em>" + s;
              } else {
                _times = "<em class='wordBox'>" + _times + "</em>" + "00" + "<em></em>" + "00" + "<em></em>" + "00";
              }
              $("#seckill_2017_timecounting").html(_times);
              setTimeout(seckill_2017_timecounter, 1000);
            } else {
              $("#seckill_2017_timecounting").html("<em class='wordBox'>" + _times + "</em>" + "00" + "<em></em>" + "00" + "<em></em>" + "00");
            }
          }

          return function() {
            init();
          }
        }
        $(function() {
          //-------焦点图
          if ($("#slider").responsiveSlides) {
            //根据querystring的值，调整焦点图中的图片顺序
            var firstKey = $("#slider").attr("data-firstKey");
            if (firstKey) {
              var item = $("li[data-focusflag='" + firstKey + "']", $("#slider"));
              if (item.size() == 1 && item.index() > 0) {
                $("#slider").prepend(item.clone());
                item.remove();
              }
            }
            $("#slider").responsiveSlides({
              auto: true,
              pager: true,
              speed: 500,
              pause: true,
              nav: true
            });
          }

          new seckill_timecounter()();

        });</script>
      <span class="blank20"></span>
      <!--- hotShopping --->
      <style type="text/css">span#seckill_2017_timecounting { color: #a10000; margin-left: 20px; } .qianggoulist ul li { float: left; width: 214px; margin: 0px 30px 32px 0px; border: 1px solid #e8e7ec; display: inline; font-family: "Microsoft YaHei"; color: #727171; font-size: 14px; position: relative; } .qianggoulist ul li h3 { height: 38px; padding: 0px 11px; line-height: 38px; color: #727171; margin: 8px 0px 2px; } .qianggoulist ul li h3 span { float: right; color: #a10000; font-size: 14px; font-family:Arial; } .qianggoulist ul li em { font-size: 16px; font-family:Arial; color: #a10000; /*font-weight: bold;*/ } .qianggoulist ul li span.sale { display: block; height: 42px; padding: 0px 11px; font-size: 16px; line-height: 40px; text-align: center; background: #f1f1f3; } .qianggoulist ul li span.sale em { font-size: 16px; } .qianggoulist ul li span.qiangbtn { display: block; width: 54px; height: 54px; background: url(http://i4.vanclimg.com/cms/20160802/qiangbtn.png) no-repeat 0px 0px; position: absolute; right: 15px; top: 15px; } .shangzhuanglist_top{ *margin-bottom:-30px;} .getMoney{ margin:20px 0px;} .piclist h2.miaosha{ height:60px; line-height:60px; background:url(http://i2.vanclimg.com/cms/20170814/ms_bg0814.png) no-repeat scroll 0px 0px;} span#seckill_2017_timecounting { color: #a10000; margin-left: 20px; float: right; padding-right: 30px; } span#seckill_2017_timecounting em { padding-left: 42px; } span#seckill_2017_timecounting em.wordBox { color: #ffffff; padding-right: 25px; } .new_miaosha_area { margin: 0 auto; width: 1200px; } .new_miaosha_area h2 { height: 64px; line-height: 64px; text-align: center; font-family: "Microsoft YaHei"; color: #9a9a9a; font-size: 18px; } .new_miaosha_title { background: url(http://i1.vanclimg.com/cms/20180117/miaosha-bg1.jpg) no-repeat scroll 0px 0px; } #seckill_2017_container { width: 1200px; color: #474747; font-weight: bold; margin: 0 auto; font-family: "Microsoft YaHei"; } #seckill_2017_container em{ font-style: normal; } #seckill_2017_container ul { overflow: hidden; margin: 10px 0 0 0; padding: 0; width: 1210px; } #seckill_2017_container ul li { float: left; width: 232px; margin-right: 10px; list-style: none; } #seckill_2017_container ul li img { width: 232px; height: 232px; } #seckill_2017_container ul li a, #seckill_2017_container ul li a:focus { text-decoration: none; color: #474747; } #seckill_2017_container ul li .new-miaosha-productname { font-size: 16px; margin-top: 10px; height: 45px; font-weight: normal; } #seckill_2017_container ul li .new-miaosha-price { position: relative; /* margin-top: 10px; */ } #seckill_2017_container ul li .new-miaosha-price .new-miaosha-oldprice { display: block; color: #d3d3d3; font-size: 14px; text-decoration: line-through; font-weight: normal; } #seckill_2017_container ul li .new-miaosha-price .new-miaosha-saleprice { display: block; color: #bb2b34; font-size: 16px; } #seckill_2017_container ul li .new-miaosha-price .new-miaosha-afterdeposit { position: absolute; right: 10px; bottom: 0; font-size: 16px; font-weight: normal; } #seckill_2017_container ul li .new-miaosha-price .new-miaosha-afterdeposit em { font-size: 24px; font-style: normal; color: #bb2b34; font-weight: bolder; }</style>
      
      <map name="Map">
        <area shape="rect" coords="9,8,597,80" href="http://cz.vancl.com/DepositPre.aspx" target="_blank">
        <area shape="rect" coords="605,14,1206,71" href="http://catalog.vancl.com/vtuan.html" target="_blank"></map>
      <!--底部通栏广告位-->
      <div class="blank0"></div>
      <div class="proAreabox clearFix">
        <table border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td>
              <img src="http://i3.vanclimg.com/cms/20180828/7.jpg" width="1200" height="41" alt="熊本"></td>
          </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td>
              <img src="http://i1.vanclimg.com/cms/20180828/5.jpg" alt="熊本" width="1200" height="56" usemap="#Map10" border="0"></td>
          </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td>
              <img src="http://i4.vanclimg.com/cms/20180828/8.jpg" width="1200" height="27" alt="熊本"></td>
          </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td colspan="7">
              <img src="http://i2.vanclimg.com/cms/20171229/0102vtys_02.jpg" width="1200" height="19" alt=""></td>
          </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td>
              <img src="http://i1.vanclimg.com/cms/20180123/vt_02.jpg" width="22" height="425" alt=""></td>
            <td>
              <a href="http://item.vancl.com/1932950.html" class="track" name="hp-hp-YSVT-1_1-v:n" target="_blank">
                <img src="http://i2.vanclimg.com/cms/20180828/1.jpg" width="267" height="425" alt="凡客80免烫衬衫"></a>
            </td>
            <td>
              <img src="http://i1.vanclimg.com/cms/20180123/vt_04.jpg" width="28" height="425" alt=""></td>
            <td>
              <a href="http://item.vancl.com/6379493.html" class="track" name="hp-hp-YSVT-1_2-v:n" target="_blank">
                <img src="http://i3.vanclimg.com/cms/20180830/2.jpg" width="267" height="425" alt="牛仔夹克 轻弹 男款"></a>
            </td>
            <td>
              <img src="http://i1.vanclimg.com/cms/20180123/vt_06.jpg" width="28" height="425" alt=""></td>
            <td>
              <a href="http://item.vancl.com/6375169.html" class="track" name="hp-hp-YSVT-1_3-v:n" target="_blank">
                <img src="http://i3.vanclimg.com/cms/20180830/3.jpg" width="267" height="425" alt="凡客外套 水柔棉 拉链开衫 男款"></a>
            </td>
            <td>
              <img src="http://i1.vanclimg.com/cms/20180123/vt_08.jpg" width="29" height="425" alt=""></td>
            <td>
              <a href="http://item.vancl.com/6375172.html" class="track" name="hp-hp-YSVT-1_4-v:n" target="_blank">
                <img src="http://i2.vanclimg.com/cms/20180828/4.jpg" alt="凡客夹克 双帽双拉链 轻弹 男款" width="267" height="425"></a>
            </td>
            <td>
              <img src="http://i1.vanclimg.com/cms/20180123/vt_10.jpg" width="25" height="425" alt=""></td>
          </tr>
        </table>
        
        <table border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td>
              <img src="http://i5.vanclimg.com/cms/20171228/sjyst_09.jpg" width="1200" height="30" alt="新品"></td>
          </tr>
        </table>
        </br>
        <style type="text/css">.shangzhuanglist { overflow: hidden; } .shangzhuanglist ul li { float: left; margin-right: 17px; display: inline; } .shangzhuanglist ul li.pic_one { width: 590px; } .shangzhuanglist ul li.pic_two { width: 290px; } .shangzhuanglist ul li.pic_three { width: 286px; } .shangzhuanglist ul li div { margin-bottom: 16px; } .shangzhuanglist ul li h3, .kuzhuanglist ul li h3 { height: 28px; padding: 20px 12px; line-height: 28px; border: 1px solid #e8e7ec; border-top: 0px; font-family: "Microsoft YaHei"; font-size: 14px; } .shangzhuanglist ul li h3 span, .kuzhuanglist ul li h3 span { float: right; color: #a10000; font-family: Arial; line-height: 24px; font-size: 14px; } .shangzhuanglist ul li h3 span em, .kuzhuanglist ul li h3 span em { font-size: 16px; padding-left: 10px; } .kuzhuanglist { overflow: hidden; } .kuzhuanglist ul li { width: 285px; height: 508px; float: left; display: inline; margin-right: 20px; margin-bottom: 20px; } .otherlist { overflow: hidden; *margin-bottom:28px; } .otherlist ul li { float: left; width: 385px; height: 275px; display: inline; margin: 0px 22px 28px 0px; } .shangzhuanglist_top { *margin-bottom:-30px; }</style>
        <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
          <h2>优选推荐</h2>
          <ul>
            <li class="pic_one">
              <a href="http://catalog.vancl.com/csz4.html" class="track" name="hp-hp-jpzk-1_1-v:n" target="_blank">
                <img src="http://i5.vanclimg.com/cms/20180822/pc-4.0.jpg" alt="4.0日式免烫衬衫" width="590" height="440" /></a>
              <h3>
                <span>充值购买更优惠</span>4.0日式免烫衬衫</h3></li>
            <li class="pic_two">
              <div>
                <a href="http://s.vancl.com/27540-s3.html?k=%E5%B8%86%E5%B8%83%E9%9E%8B#|s-s-filter_cat-27540|s_order_0_3" class="track" name="hp-hp-jpzk-2_2-v:n" target="_blank">
                  <img src="http://i2.vanclimg.com/cms/20180830/6.jpg" alt="帆布鞋" width="290" height="180" /></a>
                <h3>
                  <span>充值购买相当于
                    <em>49</em>元起</span>帆布鞋</h3></div>
              <div>
                <a href="http://catalog.vancl.com/cxlx.html" class="track" name="hp-hp-jpzk-2_3-v:n" target="_blank">
                  <img src="http://i3.vanclimg.com/cms/20180822/pc-cx.jpg" alt="潮鞋" width="290" height="180"></a>
                <h3>
                  <span>充值购买更优惠</span>潮鞋来袭</h3></div>
            </li>
            <li class="pic_three" style="margin-right: 0px;">
              <a href="http://catalog.vancl.com/xbxx.html" class="track" name="hp-hp-jpzk-1_4-v:n" target="_blank">
                <img src="http://i2.vanclimg.com/cms/20180822/pc-xb.jpg" alt="运动户外" width="286" height="440"></a>
              <h3>
                <span>充值购买更优惠</span>熊本熊卫衣</h3></li>
          </ul>
        </div>
        <div class=" piclist shangzhuanglist clear">
          <ul>
            <li class="pic_one">
              <a href="http://catalog.vancl.com/njfzt.html" class="track" name="hp-hp-jpzk-2_1-v:n" target="_blank">
                <img src="http://i2.vanclimg.com/cms/20180822/pc-njf.jpg" alt="凡客牛津纺衬衫" width="590" height="440" /></a>
              <h3>
                <span>充值购买更优惠</span>牛津纺衬衫</h3></li>
            <li class="pic_two">
              <div>
                <a href="http://catalog.vancl.com/mncs.html" class="track" name="hp-hp-jpzk-1_2-v:n" target="_blank">
                  <img src="http://i2.vanclimg.com/cms/20180822/pc-mcs.jpg" alt="纳米防污vt" width="290" height="180" /></a>
                <h3>
                  <span>充值购买更优惠</span>麻衬衫</h3></div>
              <div>
                <a href="http://catalog.vancl.com/xptjrk.html" class="track" name="hp-hp-jpzk-2_2-v:n" target="_blank">
                  <img src="http://i3.vanclimg.com/cms/20180601/pfy.jpg" alt="新品到货" width="290" height="175" /></a>
                <h3>
                  <span>充值购买更优惠</span>新品到货</h3></div>
              <li class="pic_three" style="margin-right: 0px;">
                <a href="http://coats.vancl.com" class="track" name="hp-hp-jpzk-2_4-v:n" target="_blank">
                  <img src="http://i4.vanclimg.com/cms/20180822/pc-wt.jpg" alt="外套" width="286" height="440"></a>
                <h3>
                  <span>充值购买更优惠</span>外套</h3></li>
            </li>
          </ul>
        </div>
        
        <div class="piclist kuzhuanglist clear">
          <h2>下装推荐</h2>
          <ul>
            <li>
              <a href="http://s.vancl.com/search?k=%E7%89%9B%E4%BB%94%E8%A3%A4&orig=3" class="track" name="hp-hp-xztj-1_1-v:n" target="_blank">
                <img src="http://i1.vanclimg.com/cms/20180822/pc-nz.jpg" alt="凡客休闲裤 " width="285" height="438"></a>
              <h3>
                <span>充值购买相当于
                  <em>79</em>元起</span>牛仔裤</h3></li>
            <li>
              <a href="http://s.vancl.com/search?k=%E4%BC%91%E9%97%B2%E8%A3%A4&orig=3" class="track" name="hp-hp-xztj-1_2-v:n" target="_blank">
                <img src="http://i4.vanclimg.com/cms/20180822/pc-xx.jpg" alt="凡客牛仔裤" width="285" height="438"></a>
              <h3>
                <span>充值购买相当于
                  <em>79</em>元起</span>休闲裤</h3></li>
            <li>
              <a href="http://s.vancl.com/search?k=%E9%92%88%E7%BB%87%E8%A3%A4&orig=3" class="track" name="hp-hp-xztj-1_3-v:n" target="_blank">
                <img src="http://i3.vanclimg.com/cms/20180822/pc-zz.jpg" alt="针织裤" width="285" height="438"></a>
              <h3>
                <span>充值购买相当于
                  <em>49</em>元起</span>针织裤</h3></li>
            <li style="margin-right: 0px;">
              <a href="http://catalog.vancl.com/sportydbx.html" class="track" name="hp-hp-xztj-1_4-v:n" target="_blank">
                <img src="http://i5.vanclimg.com/cms/20180822/pc-yd.jpg" alt="女裙" width="285" height="438"></a>
              <h3>
                <span>充值购买相当于
                  <em>59</em>元起</span>运动户外</h3></li>
          </ul>
        </div>
        <div class="piclist otherlist clear">
          <h2>更多精品</h2>
          <ul>
            <li>
              <a href="http://home.vancl.com" class="track" name="hp-hp-gdjp-1_1-v:n" target="_blank">
                <img src="http://i1.vanclimg.com/cms/20180822/pc-jj.jpg" alt="家居" width="385" height="275" /></a>
            </li>
            <li>
              <a href="http://s.vancl.com/search?k=%E5%86%85%E8%A1%A3" class="track" name="hp-hp-gdjp-1_2-v:n" target="_blank">
                <img src="http://i5.vanclimg.com/cms/20180824/pc-ny2.jpg" alt="内衣" width="385" height="275" /></a>
            </li>
            <li style="margin-right: 0px;">
              <a href="http://mianwa.vancl.com" class="track" name="hp-hp-gdjp-1_3-v:n" target="_blank">
                <img src="http://i5.vanclimg.com/cms/20180822/pc-wp.jpg" alt="袜品" width="385" height="275" /></a>
            </li>
          </ul>
        </div>
        <div class="piclist otherlist clear">
          <ul>
            <li style="margin-bottom:0px;">
              <a href="http://s.vancl.com/28278-s1.html?k=%E6%AF%9B%E5%B7%BE" class="track" name="hp-hp-gdjp-1_4-v:n" target="_blank">
                <img src="http://i4.vanclimg.com/cms/20180822/pc-mj.jpg" alt="毛巾" width="385" height="275" /></a>
            </li>
            <li style="margin-bottom:0px;">
              <a href="http://catalog.vancl.com/hyxxb.html" class="track" name="hp-hp-gdjp-1_5-v:n" target="_blank">
                <img src="http://i5.vanclimg.com/cms/20180822/pc-bb.jpg" alt="箱包" width="385" height="275" /></a>
            </li>
            <li style="margin-right: 0px; margin-bottom:0px;">
              <a href="http://fanbuxie.vancl.com/" class="track" name="hp-hp-gdjp-1_6-v:n" target="_blank">
                <img src="http://i3.vanclimg.com/cms/20180824/fbx.jpg" alt="休闲鞋" width="385" height="275" /></a>
            </li>
          </ul>
        </div>
        <script language="javascript" type="text/javascript">window.onload = function() {
            $(".publicfooterclear ul li").eq(1).find("p").eq(1).html("7天内退货");
          }</script>
      </div>
</div>

<style type="text/css">/*砸屏广告*/ .screenAdPop{ width:980px; position:absolute;left:50%; top:50%; margin-top:-300px;z-index:999999; margin-left:-490px; overflow:hidden;} .screenAdPop .screenAdPopfull{ display:none;} .screenAdPop .screenAdPopnarrow{ display:block;} .screenAdPop a{ display:block;} .screenAdPop a img{ vertical-align:top;} .screenAdClose{ display:block; position:absolute; right:14px; top:14px; background:url('/index_static/images/closedz_3.png') no-repeat left top; width:29px; height:29px; cursor:pointer;} .full .screenAdPop{ width:1200px; margin-left:-600px;} .full .screenAdPop .screenAdPopfull{ display:block;} .full .screenAdPop .screenAdPopnarrow{ display:none;}
  </style>

<!-- 广告的div ------------------------------------------- -->
    <div id="overlay">
      <div style="background:#000;filter:alpha(opacity=40);opacity:0.4;-moz-opacity:0.4;width:100%;height:100%; position:fixed; _position:absolute;left:0px;top:0px; z-index:999998;"></div>
      <div class="screenAdPop">
        <p class="screenAdPopfull">
           <a href="javascript:" name="hp-hp-billboard-0-v:n" class="track">
            <img width="1200px" height="600px" src="{{$g->img}}" alt="" />
           </a>
        </p>
        <p class="screenAdPopnarrow">
          <a href="javascript:" name="hp-hp-billboard-0-v:n" class="track">
            <img width="980px" height="660px" src="" alt="" /></a>
        </p>
        <span class="screenAdClose"></span>
      </div>
    </div>
  @endsection