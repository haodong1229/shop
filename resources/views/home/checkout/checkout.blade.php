<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="zh-CN" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>确认提交订单 - VANCL 凡客诚品</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="Stylesheet" type="text/css" charset="utf-8" href="/checkout_static/css/css_2.css" />
        <script type="text/javascript" charset="utf-8" src="/checkout_static/js/js.js"></script>
        <script type="text/javascript" charset="utf-8" src="/checkout_static/js/jquery-1.8.3.min.js"></script>
        
    <link rel="Stylesheet" type="text/css" charset="utf-8" href="/checkout_static/css/css_3.css" />
    <script type="text/javascript" src="/checkout_static/js/js.js"></script>
    
    <script type="text/javascript" src="/checkout_static/js/js.js"></script>
    <script type="text/javascript" src="/checkout_static/js/js.js"></script>

    </head>
    <body class="checkout">
        <div class="shade"></div>
        <div id="wrapper">
            <div id="header" class="clearfix">
                    <a class="logo" href="http://www.vancl.com/" title="凡客诚品" target="_blank">
                        <img alt="凡客诚品"  src ="/checkout_static/picture/vancl-logo.png" />
                    </a>
                    <div class="help-center">
                        <a href="http://help.vancl.com/" target="_blank">帮助中心</a>
                    </div>
                    <div class="account">
                            <p>您好，<span class="username">jordi</span><a class="logout" href="https://login.vancl.com/login/userloginout.aspx">退出登录</a>|<a class="switch" href="https://login.vancl.com/login/login.aspx?http://shopping.vancl.com/mycart">更换用户</a></p>

                    </div>
            </div>
            <div id="location">
            
               
    <span><a href="http://shopping.vancl.com/mycart">1.我的购物车</a></span> <em>2.填写核对信息单</em>
    <span>3.成功提交订单</span>

            </div>
            <div id="content">
                


<div class="wrapper clearfix">
        <section class='order-info'  >    <div id="addr" class="addr clearfix">
                    <!-- 2015.08.04 更新 -->
        <div class="addr-hd inland-addr-hd addr-hd-new clearfix">
        <h3  class="addr-title">收货地址：</h3>   
        </div>

        <section class="inland-addr">

        <form id="modify-addr-form" action="/checkout/setaddress">

            <!-- 如果有数据,则显示 -->
            @foreach($addr as $row)
            <div class="newaddrdiv addr-selected user-def-addr addrall" style="display:none;float:left;@if($row) display: block; @endif">
              <table>
                <tbody>
                  <tr class="">
                    
                    <td class="addr-detail">
                      <div class="addr-lang-option-edit">
                        <span>{{$row->name}}</span>
                        <span>{{$row->phone}}</span>
                        <span>{{$row->area}}</span>
                        <span style="height: 20px; overflow: hidden;">{{$row->address}}({{$row->emai}})</span>
                    
                    </div>
                    </td>
                  </tr>
                  <tr class="edit-addr-panel">
                    <td></td>
                    <td colspan="3"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            @endforeach
            <!-- 如果有数据则显示, 结束-------------------------------- -->
            <!-- 添加地址 -->
        <div class="add-addr-panel  nobody-add-addr " id="tianjia" style="display:block;float:left">
          <input class="fix-ckb-radio" id="add-addr" name="AddressId" checked="checked" type="radio" value="0" data-url="/checkout/showaddaddress?isforeign=false">
          <label for="add-addr" data-url="/checkout/showaddaddress?isforeign=false">
            <span>+</span>添加新地址</label>  

        </div>

        </form>
</section>
<script type="text/javascript">
    $('.addrall').click(function(){
        $(this).css({'border':'3px red solid'});

    });

    $('.addrall').mousedown(function(){
        $(this).css({'border':'3px yellow solid'});
        
    });

</script>

    </div>


        <div class="addr-form" style="display: none;">

        <form id="set-addr-form" action="/checkout_addr" method="post" class="" style="padding-top:20px" >
            {{csrf_field()}}
        <ol class="addr-ol" style="padding-left:0px;display:none">
        <li>
            <div>
                <span>*</span> 收&nbsp; 货&nbsp; 人：</div>
            <div>
                <input type="text" id="addressee" name="name" maxlength="20" autofocus="true" placeholder="请准确填写真实姓名" class="place-holder" "="" value="">
                <p class="error">
                </p>
            </div>
        </li>
        <li>
            <div>
                <span>*</span> 地 区：</div>
            <div>
                <!-- 城市级联 -->
            <select id="cid">
                <option class="ss">--请选择---</option>
            </select>
            </div>
               <input type="hidden" name="area" value="">
            
        </li>
        <li>
            <div>
                <span>*</span> 详细地址：</div>
            <div>
                <div id="province-in-detail"></div>
                <div id="city-in-detail"></div>
                <div id="area-in-detail"></div>
                <input type="text" id="addr-detail" class="addr-detail place-holder" name="address" maxlength="80" placeholder="请填写详细路名及门牌号" value="">
                <a href="" target="_blank">配送范围与配送时间 </a>
                <p class="error">
                </p>
            </div>
        </li>
        <li>
            <div>
                <span>*</span> 邮政编码：</div>
            <div>
                <input type="number" placeholder="请填写正确的邮政编码" id="postal-code" name="emai" class="place-holder" value="" maxlength="6">
                <span id="default-postal-code"></span><a id="use-postal-code">使用此邮编</a>
                <p class="error">
                </p>
            </div>
        </li>
        <li>
            <div>
                &nbsp;&nbsp;手 机：</div>
            <div>
                <input type="tel" id="mobile-phone" name="phone" class="mobile place-holder" placeholder="手机和座机至少填写一个" value="" data-error="请输入正确的手机号码" maxlength="11">
                <p class="error">
                </p>
            </div>  
        </li>
        <li>
            <input type="hidden" name="path"  value="{{session('id')}}">
            <input type="submit" id="buttonid" class="save-new-addr track" value="">
        </li>
        <a class="list_inland-cancel-edit" style="display: inline;">X</a>
        </ol>
      </form>
</div>


<!-- 添加地址的script 脚本 -->
<script type="text/javascript">
    //一级城市
    $.get('/checkout_chengshi',{upid:0},function(data){
            // document.write(data);
            // d = JSON.parse(data);
            d = JSON.stringify(data);
            // alert(data);
           
    for (var i=0; i < data.length;i++) {
        $('.ss').attr("disabled",true);
        // option = '<option value="'+(i+1)+'" name="yi">'+data[i]+'</option>';
        option='<option value="'+data[i].id+'">'+data[i].name+'</option>';

        $('#cid').append(option);
    }
       },'json');

    //多级城市
    $('select').live("change",function(){
        //移除元素
        $(this).nextAll("select").remove();

        o = $(this);
        //获取子级的upid
        upid = $(this).val();
        // alert($upid);

        $.get('/checkout_chengshi',{upid:upid},function(data){
            // document.write(data);
            // d = JSON.parse(data);
            // d = JSON.stringify(data);
            // alert(data);
            select = $('<select class="chengshi"></select>')

            select.append('<option value="" class="mm">--请选择--</option>');

            if(data.length > 0) {
                for(var i=0;i<data.length;i++){
                    $(".ss").attr("disabled",true);
                    // alert(data[i].id);
                    //存储在option
                   option='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    // alert(option);
                    //把带有数据的option内部插入到第一个select
                    select.append(option);
                }
                //把创建好的select追加到第一个selcet后
                o.after(select);
                //禁用其他级别 选择
                $(".mm").attr("disabled",true);
            }
        },'json');
    });
    // 选好的select框 存入到数组里
    arr = [];
    $('#buttonid').click(function(){

        $("select").find('option:selected').each(function(){
                
                value=$(this).html();
                // alert(value);
                //添加到数组里
                arr.push(value);

        });
         $("input[name='area']").val(arr);
    });

    //单击list_inland-cancel-edit 关闭
    $('.list_inland-cancel-edit').click(function(){
        $(".addr-form").css({"display":"none"});
       $('.addr-ol').css({'display':'none'});
    });
    //单击添加收货地址就出现收货框
    $('#tianjia').click(function(){
       $(".addr-form").css({"display":"block"});
       $('.addr-ol').css({'display':'block'});
        
    });

</script>



    <div id="delivery" class="delivery">
        <h3 class="delivery-title addr-hd-new" data-has-delivery=&#39;true&#39; >
    配送方式：
</h3>

<section class="inland-addr">
    <ol class="choose-delivery" style="margin-top:8px">
            <li class="delivery-way disnone">
                <h4>
                    送货方式：</h4>
            </li>
            <li class="delivery-way-items " style="margin: 5px 0px 0px 5px;border: none;text-align: left;line-height: 20px; height: 20px;width:100%">                
                <input id="transferId-01" type="radio" class="delivery-radio" style="display:inline;"
                    name="transferId" value="01"
                             checked ="checked"
/>
                <label for="transferId-01" class="delivery-item" style="display:inline;*width:80px; *height:20px;">
                        快递
                </label>
                       
   <form method="post" action="/checkout/1">

      <span class="error">请选择送货方式</span> </li>
        <li class="delivery-divide disnone"></li>
        <li class="delivery-time-title disnone">
            <h4>
                送货时间：</h4>
        </li>
        <li class="delivery-time-items">
                    <div class="choose-delivery-selected">
                    <input id="transferTime-Working" type="radio" name="express" value="15" class="disnone"
                     checked ="checked"
/>
                    <label for="transferTime-Working">周一至周五、工作日送货</label>
                        <span class="error">请选择送货时间</span>
                </div>
                    <div class="">
                    <input id="transferTime-Weekend" type="radio" name="express" value="67" class="disnone"
/>
                    <label for="transferTime-Weekend">周六、周日、假日送货</label>
                    </div>
                    <div class="">
                    <input id="transferTime-AnyTime" type="radio" name="express" value="17" class="disnone"
/>
                    <label for="transferTime-AnyTime">周一至周日、假日均可送货</label>
                </div>
        </li>
        <li class="save-delivery-panel" style="line-height: 0px;display:inline">
            <input type="submit" name="sp_cart_delivery_save" style="display:none" class="save-delivery track " value="" />
        </li>
        <li class="delivery-explanation clearfix" style="position:/checkout_static"><em>声明：</em>
            <div>
                
                <p>1.&nbsp;送货时间：早 8:30至 晚7:30</p>
                2.&nbsp;我们会努力按照您选择的时间进行配送，但因天气、交通等因素影响，您的订单有可能会有延误现象，请您谅解！
            </div>
        </li>
    </ol>

</section>
<span class="clear"></span>
<script type="text/javascript">
    $(document).ready(function () {

        $("body").delegate(".delivery-time-items div", "mouseenter mouseleave", function (e) {
            var eventType = e.type,
				currentObj = $(this);
            if (eventType === "mouseenter") {
                currentObj.css("border", "solid 2px #b80000");
            } else {
                currentObj.removeAttr("style");
            }
        });

        $("body").delegate(".delivery-time-items div,.delivery-way-items .delivery-radio", "click", function (e) {
            if ($(this).is("div")) {
                if ($(this).hasClass("choose-delivery-selected")) {
                    return;
                }
                $(".delivery-time-items").find("div").each(function () {
                    $(this).removeClass("choose-delivery-selected");
                    $(this).find("input").attr("checked", "false");
                });
                $(this).find("input").attr("checked", "true");
                $(this).addClass("choose-delivery-selected");
            } 
            var the = $("#delivery-form"),
				deliveryTimeError = the.find(".delivery-time-items .error"),
				deliveryWayError = the.find(".delivery-way-items .error"),
				isTimeOk = window.orderConfirm.required(the.find("input[name='transferTime']")),
				isWayOk = window.orderConfirm.required(the.find("input[name='transferId']"));
            if (!isTimeOk) {
                deliveryTimeError.css({
                    display: "inline-block"
                });
            } else {
                deliveryTimeError.hide();
            }
            if (!isWayOk) {
                deliveryWayError.css({
                    display: "inline-block"
                });
            } else {
                deliveryWayError.hide();
            }
            if (isTimeOk && isWayOk) {
                window.orderConfirm.saveDelivery(the);
            }
        });

    });

</script>

    </div>
    <div id="pay" class="pay noborder clearfix">
            <div class="pay-hd pay-title">
            <h3  class='pay-title'>支付方式：</h3>
        
        
    </div>    

<section class="inland-addr">
            <div class="pay-online">            
                <input id="identifier"
                 checked =checked class="fix-ckb-radio other-pay" name="" type="radio" 
                       value="-1$-1$False$False"  
                />
                <label for="identifier" class="  pay-online-label-selected">在线支付</label>            
               
                        <a class="pay-online-bank-list oprate" href="javascript:;">
                            查看银行列表
                            <div class="pay-online-list IsOverSeaPay">
                                    <h5 class="bank-or-agency-pay">
                                        银行或机构支付：</h5>
                                    <ul class="clearfix">
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/gsico.png" alt="中国工商银行" title="中国工商银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/zsico.png" alt="招商银行" title="招商银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/zgico.png" alt="中国银行" title="中国银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/jsico.png" alt="中国建设银行" title="中国建设银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/yzico.png" alt="中国农业银行" title="中国农业银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/gfico.png" alt="广发银行" title="广发银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/xyico.png" alt="兴业银行" title="兴业银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/bjico.png" alt="北京银行" title="北京银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/ncico.png" alt="北京农村商业银行" title="北京农村商业银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/nyico.png" alt="中国邮政储蓄银行" title="中国邮政储蓄银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/jtico.png" alt="交通银行" title="交通银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/pfico.png" alt="浦发银行" title="浦发银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/szico_1.jpg" alt="深圳发展银行" title="深圳发展银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/gdico.png" alt="中国光大银行" title="中国光大银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/msico.png" alt="中国民生银行" title="中国民生银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/zxico.png" alt="中信银行" title="中信银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/paico.png" alt="深圳平安银行" title="深圳平安银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/hzico.png" alt="杭州银行" title="杭州银行" />
                                            </li>
                                            <li>
                                            
                                                <img class="bank-img" src="/checkout_static/picture/nbico.png" alt="宁波银行" title="宁波银行" />
                                            </li>
                                    </ul>
                                    <h5 class="bank-or-agency-pay">
                                        支付平台：</h5>
                                    <ul class="clearfix">
                                                <li>
                                                    <img class="bank-img" src="/checkout_static/picture/alipayscancode.png" alt="支付宝手机" title="支付宝手机" />
                                                </li>
                                                <li>
                                                    <img class="bank-img" src="/checkout_static/picture/zfbico.png" alt="支付宝" title="支付宝" />
                                                </li>
                                        <li>
                                            <img class="bank-img" src="/checkout_static/picture/weixinshaomiao.png" alt="微信扫码支付" title="微信扫码支付"/>
                                        </li>
                                    </ul>
                            <span class="bank-list-arrow"></span>
                        </div>
                        </a>
            </div>
<span class="error">请选择支付方式</span>

</section>
<style type="text/css">
    .IsOverSeaPay li
    {
        float: left;
        padding: 10px 10px 0 0;
    }
    .IsOverSeaPay img
    {
        width: 123px;
        height: 31px;
    }
    .IsOverSeaPay
    {
        padding-top: 15px;
        z-index: 99;
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {
        $(".IsOverSeaPay").appendTo($("body"));
        $(".pay-online-bank-list").hover(function () {
            var atop = $(".pay-online-bank-list").offset().top;
            var aleft = $(".pay-online-bank-list").offset().left;
            $(".IsOverSeaPay").css("top", atop + 20 + "px");
            $(".IsOverSeaPay").css("left", aleft - 230 + "px");
            $(".IsOverSeaPay").show()
        }, function () { $(".IsOverSeaPay").hide() });
        $(".IsOverSeaPay").hover(function () { $(this).show() }, function () { $(this).hide() });

        $("body").delegate("#payAll,#payPre", "click", function () {
            var obj = $(this);
            if (obj.is("#payAll")) {
                var submitBtn = $("#submit-order-btn");
                submitBtn.blur().removeClass("submit-order-btn").addClass("submit-order-loading").val("正在为您计算...");
                window.location.reload();
            } else {
                $.ajax({
                    type: "POST",
                    url: "/checkout/CancelPreOrderPayAll",
                    beforeSend: function () {
                        $("#virtual-account").remove();
                        $("#points").remove();
                        $("#gift-card").remove();
                        window.orderConfirm.changeReHieght();
                    },
                    success: function (result) {
                        window.orderConfirm.getOrderInfo();
                    }
                })
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        if ($("#pay-form input[type='radio']:checked").is("input[type='radio']")) {
            $("#pay h3").attr("data-has-pay", "true");
        }
        $("body").delegate(".cash-on-delivery label.cash-css-hdfk,.pay-online label", "mouseenter mouseleave", function (e) {
            var eventType = e.type,
				currentObj = $(this);
            if (eventType === "mouseenter") {
                currentObj.css("border", "solid 2px #b80000");
            } else {
                currentObj.removeAttr("style");
            }
        });
        $("body").delegate(".cash-on-delivery label.cash-css-hdfk,.pay-online label", "click", function () {
            var the = $("#pay-form");
            var id = $(this).attr("for");
            the.find("input").removeAttr("checked");
            $("#" + id).attr("checked", true);
            var error = the.find("span.error");
            //            if (window.orderConfirm.required(the.find("input[name='identifier']"))) {
            error.hide();
            window.orderConfirm.savePay(the)
            //            } else {
            //                error.show()
            //            }
        });

    });

</script>

    </div>
        <div id="virtual-account" class="virtual-account">
            
    <div class="virtual-account-hd clearfix">
            <input type="checkbox" id="virtualAccount" name="" style="float: left;
                margin: 14px 5px 0 18px;" />
            <script type="text/javascript">                $("#virtualAccount").attr("checked", false);</script>    
            <h3 class='virtualaccount-title' style="text-align: left; width: auto !important;
                padding-right: 10px">
                使用账户余额</h3>
            <span class="virtual-account-balance">账户余额:<em>￥0.00</em></span>
            <script type="text/javascript">
                $(document).ready(function () {
                    window.orderConfirm.changeReHieght();
                    if ($(".nobody-add-addr").is("div")) {
                        $("#virtual-account").css("top", (0 - 160) + "px")
                    }
                });
            </script>
            <a id="czwenan" href="http://cz.vancl.com/DepositPre.aspx" style="line-height: 40px; color: #A10000;
                margin-left: 20px; border-bottom: 1px; border-bottom-color: #A10000; border-bottom-style: solid;
                *padding-top: 0px">充100返100,点击充值</a>
    </div>
<script type="text/javascript">
    $(document).ready(function () {
        $("body").delegate("#virtualAccount", "click", function () {
            if ($(this).attr("checked")) {
                $.ajax({
                    type: "POST",
                    url: "/checkout/CheckVirtualAccount",
                    beforeSend: function () {
                        $("#gift-card-radio").attr("disabled", "disabled");
                        $("#points-radio").attr("disabled", "disabled");
                    },
                    success: function (result) {
                        $("#virtual-account").html(result);
                        window.orderConfirm.changeReHieght();
                        window.orderConfirm.virtualAccountChange();
                        $("#points-radio").removeAttr("disabled");
                        $("#gift-card-radio").removeAttr("disabled");
                    }
                })
            } else {
                $.ajax({
                    type: "POST",
                    url: "/checkout/CancelVirtualAccount",
                    beforeSend: function () {
                        $("#gift-card-radio").attr("disabled", "disabled");
                        $("#points-radio").attr("disabled", "disabled");
                    },
                    success: function (result) {
                        $("#virtual-account").html(result);
                        window.orderConfirm.changeReHieght();
                        window.orderConfirm.virtualAccountChange();
                        $("#points-radio").removeAttr("disabled");
                        $("#gift-card-radio").removeAttr("disabled");
                    }
                })
            }
        });
        var version = $.browser.version;
        if (version == "7.0" || version == "6.0") {
            setInterval(function () {
                foo();
            }, 0);
        }
        function foo() {
            $("#virtual-account").css("zoom", 1);
            $(".addr-list").addClass("zoomClass");
        }

        $.ajax({
            type: "get",
            async: false,
            url: "https://recom-s.vancl.com/RechargeCz/getRechargeCzInfo",
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
        <div id="points" class="points" style="margin-top: 15px;">
                <div class="delivery-hd clearfix" style="margin-top: 15px;">
            <input type="checkbox" id="points-radio" name="" style="float: left; margin-top: 3px;"
                paytype="2" />
            <script type="text/javascript">                $("#points-radio").attr("checked", false);</script>    
            <h3 class="points-titles" data-has-delivery="true">
                使用积分：</h3>
            <span>使用0积分，抵现<em style="color: #b81c22">0元</em>。 </span>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("body").delegate("#points-radio", "click", function () {
                if ($(this).attr("checked")) {
                    $.ajax({
                        type: "POST",
                        url: "/checkout/usePoints",
                        beforeSend: function () {
                            $("#virtualAccount").attr("disabled", "disabled");
                            $(".gift-card-panel input").attr("disabled", "disabled");
                            $(".radio-gift-card-no").attr("disabled", "disabled");
                            $("#use-gift-card-form input").each(function () { $(this).attr("disabled", "disabled") });
                            $("#gift-card-radio").attr("checked", false);
                            $("[for='gift-card-pwd']").hide();
                            $("[for='gift-card-id']").hide();
                            $(".cardRadio").attr("disabled", "disabled");
                            $(this).attr("disabled", "disabled");
                            $("#gift-card-radio").attr("disabled", "disabled");
                            $(".show-gift-card-list").hide();
                        },
                        success: function (result) {
                            $(this).removeAttr("disabled");
                            $("#virtualAccount").removeAttr("disabled");
                            $("#gift-card-radio").removeAttr("disabled");
                            window.orderConfirm.giftCardChange();
                            $("#gift-card").html(result);
                            $("#cardForWeibo").attr("checked", true);
                            $(".cardRadio").attr("disabled", "disabled");
                            $(".cardCommon").addClass("cardEleHide");
                            $("#sumbitGiftCard").val("使用礼品卡");
                            window.orderConfirm.changeReHieght();
                        }
                    })
                } else {
                    $.ajax({
                        type: "POST",
                        url: "/checkout/cancelPoints",
                        success: function (result) {
                            window.orderConfirm.changeReHieght();
                            window.orderConfirm.giftCardChange();
                        }
                    })
                }
            });

        });
    </script>

        </div>
        <div id="gift-card" class="gift-card giftcards">
  
<script type="text/javascript">
    $(document).ready(function () {
        $("body").delegate(".cardRadio", "click", function () {
            if ($(this).is("#cardForWeibo")) {
                $(".cardCommon").addClass("cardEleHide");
                $("#sumbitGiftCard").val("使用礼品卡");
                $(".gift-card-form-panel").hide();
                window.orderConfirm.changeReHieght();
                $("#gift-card-id").val("");
                $("#gift-card-pwd").val("");
            } else {
                $(".cardCommon").removeClass("cardEleHide");
                $("#sumbitGiftCard").val("使用优惠券");
                $("#gift-card-id").val("");
                $("#gift-card-pwd").val("");
            }
        });
        $("body").delegate("#gift-card-radio", "click", function () {
            if ($(this).attr("checked")) {
                $.ajax({
                    type: "POST",
                    url: "/checkout/cancelPoints",
                    beforeSend: function () {
                        $("#virtualAccount").attr("disabled", "disabled");
                        $(".gift-card-panel input").removeAttr("disabled");
                        $(".radio-gift-card-no").removeAttr("disabled");
                        $(".cardRadio").removeAttr("disabled");
                        $("#points-radio").attr("checked", false);
                        $(this).attr("disabled", "disabled");
                        $("#points-radio").attr("disabled", "disabled");
                        $("#use-gift-card-form input").each(function () { $(this).removeAttr("disabled", "disabled") });
                    },
                    success: function (result) {
                        $(this).removeAttr("disabled");
                        $("#points-radio").removeAttr("disabled");
                        $("#virtualAccount").removeAttr("disabled");
                        $(".show-gift-card-list").show();
                        window.orderConfirm.changeReHieght();
                        if ($("#virtual-account").length > 0 && $("#points").length > 0 && $("#gift-card").length > 0) {
                            $("#virtual-account").css("top", (0 - 190) + "px");
                        }
                        window.orderConfirm.giftCardChange();
                        $("#cardForWeibo").attr("checked", true);
                        $("#sumbitGiftCard").val("使用礼品卡");
                        $(".cardCommon").addClass("cardEleHide");
                        window.orderConfirm.getOrderInfo();
                    }
                })
            } else {
                $.ajax({
                    type: "POST",
                    url: "/checkout/cancelgiftcard",
                    beforeSend: function () {
                        $("#use-gift-card-form input").each(function () { $(this).attr("disabled", "disabled") });
                        $(this).attr("checked", false);
                    },
                    success: function (result) {
                        $("#gift-card").html("");
                        $("#gift-card").html(result);
                        $(".show-gift-card-list").hide();
                        window.orderConfirm.changeReHieght();
                        if ($("#virtual-account").length > 0 && $("#points").length > 0 && $("#gift-card").length > 0) {
                            $("#virtual-account").css("top", (0 - 190) + "px");
                        }
                        window.orderConfirm.giftCardChange();
                        $("#cardForWeibo").attr("checked", true);
                        $("#sumbitGiftCard").val("使用礼品卡");
                        $(".cardRadio").attr("disabled", "disabled");
                        $(".cardCommon").addClass("cardEleHide");
                        window.orderConfirm.getOrderInfo();
                    }
                })
            }
        });
    });
</script>
 
           <style type="text/css">
            .cardEleHide
            {
                width:0px;
                height:0px;
                display:none !important;
                overflow:hidden;    
            }
           </style>

  
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                if ($("#virtual-account").length == 0) {
                    if ($("#points").length == 0) {
                        if ($("#gift-card").length == 0) {
                            $(".pay-title").css({ "height": "170px", "line-height": "170px" });
                        } else {
                            $(".pay-title").css({ "height": "250px", "line-height": "250px" });
                            $("#gift-card").css('top', 630);
                        }
                    } else {
                        if ($("#gift-card").length == 0) {
                            $(".pay-title").css({ "height": "200px", "line-height": "200px" });
                            $("#points").css('top', 610);
                        } else {
                            $(".pay-title").css({ "height": "300px", "line-height": "300px" });
                            $("#points").css('top', 610);
                            $("#gift-card").css('top', 680);
                        }
                    }
                } else {
                    if ($("#points").length == 0) {
                        if ($("#gift-card").length == 0) {
                            $(".pay-title").css({ "height": "170px", "line-height": "170px" });
                            $("#virtual-account").css("top", (0 - 30) + "px");
                        } else {
                            $(".pay-title").css({ "height": "270px", "line-height": "270px" });
                            $("#virtual-account").css("top", (0 - 130) + "px");
                            $("#gift-card").css('top', 680);
                        }
                    } else {
                        if ($("#gift-card").length == 0) {
                            $(".pay-title").css({ "height": "200px", "line-height": "200px" });
                            $("#virtual-account").css("top", (0 - 60) + "px");
                            $("#points").css('top', 650);
                        }
                    }
                }
            });
        </script>
    </section>
    <div id="order-info-panel">
        <div id="all-tips" data-tips="">
</div>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#InvoiceCustom").change(function () {
                    var the = $(this);
                    var star = $("#invoice-tax .invoice-tax span");
                    star.hide();
                    if (the.attr("value") == "Company" || the.attr("value") == "IndividualBusiness") {
                        star.show();
                    }
                });
            });
        </script>
        
</div>
<div class="order-info-head">
    <h3 class="clearfix">
        <span class="order-list-title">商品清单</span>
        <a name="sp_cart_gift_back_cart" class="back2cart track" href="JavaScript:history.go(-1)">
            回到购物车，修改产品>></a>  
    </h3>
</div>
    <h5 class="order-list-head">
        订单1<span class="store-house-info">预计发货后
                <em>2天</em>
            内送达</span></h5>

 
        

    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="order-list order-list2 clearfix">
            <div class="order-list-shop" style="display: none">
                店铺:<span class="store-house-shop">
                        <a href="">VANCL 凡客诚品旗舰店</a>
                </span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>
                            商品名称
                        </th>
                        <th>
                            商品图片
                        </th>
                        <th style="display: none">
                            赠送积分
                        </th>
                        <th>
                            单价
                        </th>
                        <th>
                            数量
                        </th>
                        <th>
                            优惠
                        </th>
                        <th>
                            小计
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $rows)
                        <tr>
                            <td class="name">
                                {{$rows->gname}}

                            </td>
                            <td>
                                <img width="70px" src="{{$rows->gpic}}">
                            </td>
                            <td class="point" style="display: none">158
                                分
                            </td>
                            <td class="price">
                                ￥{{$rows->price}}
                            </td>
                            <td class="qty">{{$rows->cnt}}
                            </td>
                            <td class="preferential">
                                <div class="discount-cx">
                                        -
                                </div>
                            </td>
                            <td class="sub-total">
                                ￥{{$rows->total}} 

                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        <div class="order-amount">
            商品金额小计:<span>￥{{$total}}</span> &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;=&nbsp;&nbsp;应付:<em>￥{{$total}}</em>
        </div>
    </div>
        <ul class="all-amount">
                <li><em>已支付：<label id="price-total" data-price-total="0.00">￥0.00</label>，
                您还需支付：<label id="price-total" data-price-total="{{$total}}">￥{{$total}}元</label></em></li>
                <span style="display:none;">168.00&nbsp;&nbsp;&nbsp;168.00</span>
        </ul>

        <div class="order-submit clearfix">
            <!-- 使用隐藏域来提交数值 -->
            <!-- 总价 -->
            <input type="hidden" name="ormb" value='{{$total}}'>
            <!-- 订单总数量 -->
            <input type="hidden" name="ocnt" value='{{$ocnt}}'>
            <!-- 订单状态 -->
            <input type="hidden" name="status" value='1'>
            <!-- 订单状态 -->
            <input type="hidden" name="otime" value='{{date("Y-m-d H:i:s",time())}}'>
            <!-- 订单编号 -->
            <input type="hidden" name="oid" value='{{rand(1,10000).time()}}'>
            <!-- 关联手机号 -->
            <input type="hidden" name="phone" value='{{session("phone")}}'>

            <input type="submit" id="submit-order-btn" value="提交订单" class="submit-order-btn track" />
            <div style="border: 1px solid #EBE5BB; background: #FFFEF5; width: 60%; padding: 15px;
                margin: 0 10px 0 0; float: right; text-align: center; font-size: 14px;">
                祝您下单愉快，普通商品签收之日起7天内，可享受7天无理由退货
            </div>
            <span style="clear: both;"></span><span class="warn oprate"></span>
        </div>
    <!--特惠品移除提示-->
</form>

    </div>
</div>

            </div>
            <div id="footer">
                    <p class="copyrights">Copyright 2007 - 2018 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
                    <p class="certs">
                        <a class="ectrustprc" title="中国电子商务诚信单位" href="http://www.ectrustprc.org.cn/seal/splash/1000020.htm" target="_blank">
                            <img alt="中国电子商务诚信单位" src="/checkout_static/picture/cert-redlogo.gif" />
                        </a>
                        <span class="costumeorg" title="中国服装协会会员单位">
                            <img alt="中国服装协会会员单位" src="/checkout_static/picture/cert-costumeorg.gif" />
                        </span>
                        <a class="online315" href="http://www.315online.com.cn/member/315090053.html" title="网上交易保障中心" target="_blank">
                            <img alt="网上交易保障中心" src="/checkout_static/picture/cert-wsjybzzx.gif" />
                        </a>
                    </p>
            </div>
        </div>       
        
    <!--[if ie 6]>
    <script type="text/javascript" src="/checkout_static/js/js.js"></script>   
    <![endif]-->

        <script type="text/javascript" src="/checkout_static/js/js.js"></script>
	
    </body>
</html>
