@extends('home.public.public')
  @section('title','我的订单')
  @section('content')
<style type="text/css">
     .d1{
        width:600px;
        height:500px;
        /*background:red;*/
        display:block;
     }
     .d2{
        width:600px;
        height:500px;
        display:none;
     }
     .d3{
        width:600px;
        height:500px;
        display:none;
     }
     .d4{
        width:600px;
        height:500px;
        display:none;
     }
     .d5{
        width:600px;
        height:500px;
        display:none;
     }
</style>
    <div class="wrapper">
        <div style="height: 15px; clear: both; overflow: hidden">
        </div>
       



        
 
<link type="text/css" rel="stylesheet" href="//css.vanclimg.com/css.ashx?href=[/my/order/orderlist.css,ordertrack.css,cancelOrder.css],[/my/boot/dapei.css],[/my/share/myvancl-version2.css],[/my/accountsafe/securitylevel.css]&compress&ver=2017052513090110">


<div class="ordercontainer">
    <h3>
    <span>我的订单</span>
         <a href="http://catalog.vancl.com/zhuanti/tg_20100510.html" style="color: #a10000;
            float: right; border: none; font-size: 12px; font-weight: normal; background: url(http://i4.vanclimg.com/cms/20151231/pic_my.jpg) no-repeat left center;
            text-indent: 20px; margin: 0 5px 0 0;" target="_blank">谨防诈骗公告</a>
    </h3>
    <div>
<div class="blank10"></div>    </div>
    
<div class="AsecurityBox01">
    <div class="asProgress">
        <em>账户安全：</em>
        <div class="asProgSpeed">
            <span class="asProgNow">弱</span><span class="">中</span><span class="">强</span>
        </div>
    </div>
    <ul class="asProgUl" style="_margin-right:-12px;">
        <li class="asProgPhone01"><a href="/SafeCenter" title="手机未验证" class="track" name="my-order-safe-phone"><em></em>手机未验证</a></li>
        <li class="asProgEmail01"><a href="/SafeCenter" title="邮箱未验证" class="track" name="my-order-safe-email"><em></em>邮箱未验证</a></li>
        <li class="asProgPassword01" style="display:none;"><a href="/SafeCenter" title="未设置支付密码" class="track" name="my-order-safe-pay"><em></em>未设置支付密码</a></li>
    </ul>
    <div class="asProgAtarts" style="display:none;">为保障账户及资金安全,建议您开启全部<a href="/SafeCenter" class="track" name="my-order-safecenter">安全设置</a></div>
    <div class="blank0"></div>
</div>

    <!--<div class="blank10">
    </div>
    <div style="width: 778px; height: 56px; line-height: 28px; border: 1px #cc9998 solid;
        float: left; background: #fff6f7;">
        <span style="width: 28px; height: 18px; display: block; float: left; background: url(http://i1.vanclimg.com/returns/returns/sprite_bg.png) no-repeat 8px -49px;
            margin-top: 5px;"></span>
        <div style="width: 750px; float: left;">尊敬的客户，您在购买第三方品牌的商品后需要换货时，如发现此商品处于售罄状态，请先办理退货，然后用您的账号登陆<a href="http://www.vjia.com" target="_blank">www.vjia.com</a>，搜索到此商品后根据库存状况重新下单。</div>
    </div>
    -->
    <div class="blank10">
    </div>
    <div class="wtitle">
        <div id='cover'>
        </div>
        <input type="hidden" value="all" id="dingzhiType" name="dingzhiType" />
            <div id="myTab" class="wtitle_l">
               
                <a href="javascript:void(0)" class="track wtitle_lNa" id="dd1">全部订单<span>({{$a}})</span></a>
                <a href="javascript:void(0)" class="track " id="dd2">
                    待发货<span>({{$a1}})</span></a> <a href="javascript:void(0)" class="track" id="dd3">
                        发货中<span>({{$a2}})</span></a> <a href="javascript:void(0)" class="track" id="dd4">
                            待评价<span>({{$a3}})</span></a><a href="javascript:void(0)" class="track" id="dd5">
                           以完成<span>({{$a4}})</span></a>
                
            </div>
           
            
    </div>
    
   <div class="d1">
    @if($a!=0)
      <div class="windent_t">
                <div class="float_left">
                     
                        <span class="windent_tshi">为了保证您最快收到商品，将分<span>{{$a}}</span>单配送，请留意收货时间
                        </span>
                </div>
                <span class="ordercolor4 float_right"><span></span></span>
       </div>
        @foreach($data1 as $row)
        <div class="widdent_info" style="*z-index: 999;">
    <div class="VerticalContainer" style="height: 114px;">
        <div class="widdent_w1 VerticalSubContainer" style="*float: left;">
            <ul class="VerticalItem" style="width:700px;">
                    <li style="_margin-bottom: 8px;">                        
                        <div class="wid_id">
                           
                            <span class="s4"></span>
                            <a href="/Order/OrderDetail/60189400067964" target="_blank" class="product_id">{{$row->oid}}&nbsp&nbsp&nbsp&nbsp</a></div>
                        <div class="product">
                            <ul class="product-ul" style="width: 195px; margin-bottom: 2px;">
                                    <li><a name="my_orderList_ol_productpic_0" href="http://item.vancl.com/6375418.html?ref=my-order-list-1-1-60189400067964" target="_blank">
                                        <img style="margin: 0px; display: inline;"  alt="<strong>￥2534.00</strong>米白色" src="{{$row->gpic}}" width="50px" height="50px"></a></li>
                                    
                            </ul>
                            
                        </div>
                    </li>
                    <br>
                        <div width="80" style="float:left;">
                                数量:{{$row->ocnt}}
                        </div>

                        <div class="productImgBtn" style="float:left;margin-left: 70px;">
                            <div width="80">
                              总价:{{$row->total}}
                            </div>
                        </div>
                    
                    
            </ul>
        </div>
 
    </div>
   </div>
         @endforeach

    @elseif($a==0) 
     <div class="orderinfo">
               
                <div class="windent">
                    <span class="blank40"></span>
                    <center>
                        目前您暂无30天内的交易订单，请点击其他标签查看。</center>
                    <span class="blank40"></span>
                </div>
            
        </div>
    @endif
   </div>
   <div class="d2">
    
    @if($a1!=0)
      <div class="windent_t">
                <div class="float_left">
                    
                        <span class="windent_tshi">为了保证您最快收到商品，将分<span>{{$a1}}</span>单配送，请留意收货时间
                        </span>
                </div>
                <span class="ordercolor4 float_right"><span></span></span>
       </div>
        @foreach($users1 as $r1)
        <div class="widdent_info" style="*z-index: 999;">
    <div class="VerticalContainer" style="height: 114px;">
        <div class="widdent_w1 VerticalSubContainer" style="*float: left;">
            <ul class="VerticalItem">
                    <li style="_margin-bottom: 8px;">                        
                        <div class="wid_id">
                           
                            <span class="s4"></span>
                            <a href="/Order/OrderDetail/60189400067964" target="_blank" class="product_id">{{$r1->oid}}&nbsp&nbsp&nbsp&nbsp</a></div>
                        <div class="product">
                            <ul class="product-ul" style="width: 195px; margin-bottom: 2px;">
                                    <li><a name="my_orderList_ol_productpic_0" href="http://item.vancl.com/6375418.html?ref=my-order-list-1-1-60189400067964" target="_blank">
                                        <img style="margin: 0px; display: inline;"  alt="凡客外套 PIMA棒球服 女 米白色" src="{{$r1->gpic}}" width="50px" height="50px"></a></li>
                                    
                            </ul>
                        </div>
                    </li>
                    
                    
            </ul>
        </div>
 
                        <div width="80" style="float:left;">
                                数量:{{$r1->ocnt}}
                            </div>
                        <div class="productImgBtn"  style="float:left;margin-left: 70px;">
                               <div width="100">
                              总价:{{$r1->total}}
                            </div>
                        </div>
    </div>
   </div>
         @endforeach

    @elseif($a1==0) 
        <div class="orderinfo">
               
                <div class="windent">
                    <span class="blank40"></span>
                    <center>
                        目前您暂无3待发货的订单，请点击其他标签查看。</center>
                    <span class="blank40"></span>
                </div>
            
        </div>
    @endif
   </div>

   <div class="d3">
  @if($a2!=0)
      <div class="windent_t">
                <div class="float_left">
                    
                        <span class="windent_tshi">为了保证您最快收到商品，将分<span>{{$a2}}</span>单配送，请留意收货时间
                        </span>
                </div>
                <span class="ordercolor4 float_right"><span></span></span>
       </div>
        @foreach($users2 as $r2)
        <div class="widdent_info" style="*z-index: 999;">
    <div class="VerticalContainer" style="height: 114px;">
        <div class="widdent_w1 VerticalSubContainer" style="*float: left;">
            <ul class="VerticalItem">
                    <li style="_margin-bottom: 8px;">                        
                        <div class="wid_id">
                           
                            <span class="s4"></span>
                            <a href="/Order/OrderDetail/60189400067964" target="_blank" class="product_id">{{$r2->oid}}&nbsp&nbsp&nbsp&nbsp</a></div>
                        <div class="product">
                            <ul class="product-ul" style="width: 195px; margin-bottom: 2px;">
                                    <li><a name="my_orderList_ol_productpic_0" href="http://item.vancl.com/6375418.html?ref=my-order-list-1-1-60189400067964" target="_blank">
                                        <img style="margin: 0px; display: inline;"  alt="凡客外套 PIMA棒球服 女 米白色" src="{{$r2->gpic}}" width="50px" height="50px"></a></li>
                                    
                            </ul>
                        </div>
                    </li>
                    
                    
            </ul>
        </div>   
                        <div width="80">
                                数量:{{$r2->ocnt}}
                        </div>
                        <div class="productImgBtn"  style="float:left;margin-left: 70px;">
                               <div width="100">
                              总价:{{$r2->total}}
                            </div>
                        </div>
    </div>
   </div>
         @endforeach

    @elseif($a2==0) 
        <div class="orderinfo">
               
                <div class="windent">
                    <span class="blank40"></span>
                    <center>
                        目前您暂无发货中的订单，请点击其他标签查看。</center>
                    <span class="blank40"></span>
                </div>
            
        </div>
    @endif
   </div> 

 <div class="d4">
     @if($a3!=0)
      <div class="windent_t">
                <div class="float_left">
                    
                        <span class="windent_tshi">为了保证您最快收到商品，将分<span>{{$a3}}</span>单配送，请留意收货时间
                        </span>
                </div>
                <span class="ordercolor4 float_right"><span></span></span>
       </div>
        @foreach($users3 as $r3)
        <div class="widdent_info" style="*z-index: 999;">
    <div class="VerticalContainer" style="height: 114px;">
        <div class="widdent_w1 VerticalSubContainer" style="*float: left;">
            <ul class="VerticalItem">
                    <li style="_margin-bottom: 8px;">                        
                        <div class="wid_id">
                           
                            <span class="s4"></span>
                            <a href="/Order/OrderDetail/60189400067964" target="_blank" class="product_id">{{$r3->oid}}&nbsp&nbsp&nbsp&nbsp</a></div>
                        <div class="product">
                            <ul class="product-ul" style="width: 195px; margin-bottom: 2px;">
                                    <li><a name="my_orderList_ol_productpic_0" href="http://item.vancl.com/6375418.html?ref=my-order-list-1-1-60189400067964" target="_blank">
                                        <img style="margin: 0px; display: inline;"  alt="凡客外套 PIMA棒球服 女 米白色" src="{{$r3->gpic}}" width="50px" height="50px"></a></li>
                                    
                            </ul>
                        </div>
                    </li>
                    
                    
            </ul>
        </div>
        
        
           
                        <div width="80" style="float:left;">
                                数量:{{$r3->ocnt}}
                            </div>
                        <div class="productImgBtn"  style="float:left;margin-left: 70px;">
                               <div width="100">
                              总价:{{$r3->total}}&nbsp&nbsp
                              <span><a href="/hping/create?id={{$r3->did}}" style="font-size:20px;">去评价</a></span>
                            </div>
                        </div>
    </div>
   </div>
  @endforeach
 
    @elseif($a3==0) 
 

        <div class="orderinfo">
               
                <div class="windent">
                    <span class="blank40"></span>
                    <center>
                        目前您暂无30天内待评价的订单，请点击其他标签查看。
                    </center>
                    <span class="blank40"></span>
                </div>
            
        </div>


    @endif
   </div> 
  <div class="d5">
     @if($a4!=0)
      <div class="windent_t">
                <div class="float_left">
                    
                        <span class="windent_tshi">为了保证您最快收到商品，将分<span>{{$a4}}</span>单配送，请留意收货时间
                        </span>
                </div>
                <span class="ordercolor4 float_right"><span></span></span>
       </div>
    @foreach($users4 as $r4)
        <div class="widdent_info" style="*z-index: 999;">
    <div class="VerticalContainer" style="height: 114px;">
        <div class="widdent_w1 VerticalSubContainer" style="float: left;">
            <ul class="VerticalItem">
                    <li style="_margin-bottom: 8px;">                        
                        <div class="wid_id">
                           
                            <span class="s4"></span>
                            <a href="/Order/OrderDetail/60189400067964" target="_blank" class="product_id">{{$r4->oid}}&nbsp&nbsp&nbsp&nbsp</a></div>
                        <div class="product">
                            <ul class="product-ul" style="width: 195px; margin-bottom: 2px;">
                                    <li><a name="my_orderList_ol_productpic_0" href="http://item.vancl.com/6375418.html?ref=my-order-list-1-1-60189400067964" target="_blank">
                                        <img style="margin: 0px; display: inline;"  alt="凡客外套 PIMA棒球服 女 米白色" src="{{$r4->gpic}}" width="50px" height="50px"></a></li>
                                    
                            </ul>
                        </div>
                    </li>
                    
                    
            </ul>
        </div>
        
        
                        <div width="80" style="float:left;">
                                数量:{{$r4->ocnt}}
                            </div>
                        <div class="productImgBtn"  style="float:left;margin-left: 70px;">
                               <div width="100">
                              总价:{{$r4->total}}
                            </div>

                        </div>
           
    </div>
   </div>
         @endforeach

    @elseif($a4==0) 
        <div class="orderinfo">
               
                <div class="windent">
                    <span class="blank40"></span>
                    <center>
                        目前您暂无30天内已完成的订单，请点击其他标签查看。</center>
                    <span class="blank40"></span>
                </div>
            
        </div>
    @endif
   </div> 
  
</div>

<input type="hidden" id="hidrel" value="my_order_recommendlist_" />
 
<!--我的订单 为您推荐-->
<div style="float:right;width:778px;margin-top:5px; display:none;">
    <div class="RecommendedTitle_Pages"> 
        <span id="page-info"><label></label><span></span></span><span id="pagination"></span>
    </div>
</div>

<br>

</body>
<script type="text/javascript">
    $("#dd1").click(function(){
        $(".d1").css("display",'block');
        $(".d2").css("display",'none');
        $(".d3").css("display",'none');

    });
    $("#dd2").click(function(){
        $(".d1").css("display",'none');
        $(".d2").css("display",'block');
        $(".d3").css("display",'none');
    });
    $("#dd3").click(function(){
        $(".d1").css("display",'none');
        $(".d2").css("display",'none');
        $(".d3").css("display",'block');
    });
    $("#dd4").click(function(){
        $(".d1").css("display",'none');
        $(".d2").css("display",'none');
        $(".d3").css("display",'none');
        $(".d4").css("display",'block');
        $(".d5").css("display",'none');
    });
    $("#dd5").click(function(){
        $(".d1").css("display",'none');
        $(".d2").css("display",'none');
        $(".d3").css("display",'none');
        $(".d4").css("display",'none');
        $(".d5").css("display",'block');
    });
    $(".track").click(function(){
        $(".track").css("background",'');
        $(this).css('background','#8DB6CD');
      
    });

</script>
@endsection