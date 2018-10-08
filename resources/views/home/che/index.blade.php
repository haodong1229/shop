<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <link rel="stylesheet" href="/admin/css/bootstrap.css">
    <link rel="stylesheet" href="/admin/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/admin/css/bootstrap.datepicker.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="zh-CN" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>购物车 - VANCL 凡客诚品</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="Stylesheet" type="text/css" charset="utf-8" href="/static/che/css/css_4.css" />
        <script type="text/javascript" charset="utf-8" src="/static/che/js/jquery-1.8.3.min.js"></script>

        <!--[if IE 6]>
        <script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script>
        <![endif]-->

        
    <link rel="stylesheet" type="text/css" charset="utf-8" href="/static/che/css/css_5.css" />

    </head>
    <body class="mycart">
        <div class="shade"></div>
        <div id="wrapper">
            <div id="header" class="clearfix">
                    <a class="logo" href="/" title="凡客诚品">
                        <img alt="凡客诚品"  src ="/static/che/picture/vancl-logo_1.png" />
                    </a>
                    <div class="help-center">
                        <a href="http://help.vancl.com/" >帮助中心</a>
                    </div>
                    <div class="account">
                            <p>您好，<span class="username">13680173598</span><a class="logout" href="https://login.vancl.com/login/userloginout.aspx">退出登录</a>|<a class="switch" href="https://login.vancl.com/login/login.aspx?http://shopping.vancl.com/mycart">更换用户</a></p>

                    </div>
            </div>
            <div id="location">
            
               
    <em>1.我的购物车</em> <span>2.填写核对信息单</span> <span>3.成功提交订单</span>

            </div>
            <div id="content">
                



    <div id="cart-gift">
        <form action="/checkout">
                <table id="itable">
                    <tr>
                        <td>选项</td>
                        <td>商品</td>
                        <td>商品名称</td>
                        <td>单价</td>
                        <td>数量</td>
                        <td>小计</td>
                        <td>操作</td>
                    </tr>
                    @if (!empty(session('comt')))
                    @foreach(session("comt") as $row)
                    <tr>
                        <td><input type="checkbox" checked value="{{$row->gid}}" class="shop"></td>
                        <td><img src="{{$row->gpic}}"></td>
                        <td width="250px">{{$row->gname}}</td>
                        <td class="pri">{{$row->price}}</td>
                        <td class="t1">
                            <div class="btn-group" data-toggle="buttons">

                                <button style="width:40px;height:27px;" type="button" class="add" value="{{$row->cid}}">+</button>

                                <span class="btn" class="spa">{{$row->cnt}}</span>

                                <button style="width:40px;height:27px;" type="button" class="jian" value="{{$row->cid}}">-</button>
                            </div>
                        </td>
                        <td class="total">{{$row->cnt*$row->price}}</td>
                        <td><input type="hidden" value="{{$row->cid}}"><a href="javascript:void(0);" class="del">删除</a><input type="hidden" value="{{$row->gid}}"></td>
                    </tr>
                    @endforeach
                    @endif
                    <tr >
                        <td colspan="7" style="text-align:right">
                            <button type="submit" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off"><h2>结算</h2>
                            </button>
                        </td>
                    </tr>
                </table>
        </form>
                    <script type="text/javascript">
                        $("#myButton").click(function(){
                            // alert($(".pri").html());

                            if ($('.pri').html()) {
                                return true;

                            }
                            return false;
                        });

                        //ajax增加 购物车数量
                        $(".add").click(function(){
                            add=$(this).val();
                            o = $(this);
                            // alert(add);
                            $.get('/sp_reduce',{add:add},function(data){
                                a=JSON.stringify(data);
                                 // alert(data.total);
                                o.next().html(data.cnt);
                                 o.parents("td").next().html(data.total);
                            });
                        });

                        //ajax减少 购物车数量
                        $(".jian").click(function(){
                            jian=$(this).val();
                            o = $(this);
                            // alert(jian);
                            $.get('/sp_plus',{jian:jian},function(data){
                                a=JSON.stringify(data);
                                 // alert(data.total);
                                o.prev().html(data.cnt);
                                 o.parents("td").next().html(data.total);
                            });
                        });

                    </script>
    </div>
    <div id="cart-collocate">
        <div  class="coudan-title">
            <h2><strong>免运费凑单商品</strong>（您再买<span id="coudan-differ"></span>凡客发货商品，即可享免运费优惠）</h2>
            <a href="javascript:;" class="close"><img src="/static/che/picture/dpbox_06_1.gif"></a>
        </div>
        <div id="collocate-list" class="product-list-panel  coudan-content  clearfix clearfixCD">
        </div>
    </div>

<div id="remove-product" >
    <table cellspacing="0">
        <thead>
            <tr>
                <th scope="col" colspan="6">
                    您删除的商品，您可以 <span>重新购买</span> 或 <span>放入收藏夹</span>。
                </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<div id="gift" data-present-url="/mycart/presents">
    
</div>
<div id="recom-browse-collect" class="cuxiao" style="display:none">
    <ul class="tab">
        <li class="selected"><a href="/mycart/recent" class="track" name="sp_cart_recent">最近浏览商品</a></li>
        <li><a href="/mycart/recommended" class="track" name="sp_cart_recommended">推荐商品</a></li>        
        <li><a href="/mycart/favorites" class="track" name="sp_cart_favorites">收藏夹</a></li>
    </ul>
    <div id="recent-browse" class="product-list-panel clearfix">
    </div>
    <div id="tj-product" class="product-list-panel clearfix">
    </div>    
    <div id="favorite" class="product-list-panel clearfix">
    </div>
</div>

<img src="/static/che/picture/ocx_1.ashx" style="display:none" />



            </div>
            <div id="footer">
                    <p class="copyrights">Copyright 2007 - 2018 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
                    <p class="certs">
                        <a class="ectrustprc" title="中国电子商务诚信单位" href="http://www.ectrustprc.org.cn/seal/splash/1000020.htm" target="_blank">
                            <img alt="中国电子商务诚信单位" src="/static/che/picture/cert-redlogo_1.gif" />
                        </a>
                        <span class="costumeorg" title="中国服装协会会员单位">
                            <img alt="中国服装协会会员单位" src="/static/che/picture/cert-costumeorg_1.gif" />
                        </span>
                        <a class="online315" href="http://www.315online.com.cn/member/315090053.html" title="网上交易保障中心" target="_blank">
                            <img alt="网上交易保障中心" src="/static/che/picture/cert-wsjybzzx_1.gif" />
                        </a>
                    </p>
            </div>
        </div>       
        
   
    <script type="text/javascript" src="/static/che/js/js_1.js"></script>
    <script type="text/javascript" src="/static/che/js/js_1.js"></script>
    <script type="text/javascript" src="/static/che/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/static/che/js/js_1.js"></script>
    


        <script type="text/javascript" src="/static/che/js/js_1.js"></script>
	<script type="text/javascript">
        $('.del').click(function(){
            cid=$(this).prev().val();
            gid=$(this).next().val();
            //alert(a);
            a=$(this);
            $.get('/spdel',{cid:cid,gid:gid},function(data){
                if(data==0){
                    a.parents('tr').remove();
                    alert('删除成功');
                }
            })
        })

        $('#myButton').click(function(){
            a=[];
            $("#itable").find('tr').each(function(){
                if(!$(this).find('.shop').attr('checked')){
                    gid=$(this).find('.shop').val();
                    a.push(gid);
                }
            })
            //alert(a);
            //a=1;
            $.get('/sp_plus',{a:a},function(data){
                //alert(data);
                      }) 
   
        })
        
        $('.ad').click(function(){
            abe=$(this).parents('tr').find('.pio').attr('value');
            th=$(this);
            $.post('/sp_reduce',{abe:abe},function(data){
                //alert(data);
                th.next('.cnt').html(data);
            })
        })

        $('.ap').click(function(){
            abe=$(this).parents('tr').find('.pio').attr('value');
            th=$(this);
            $.post('/sp_plus',{abe:abe},function(data){
                //alert(data);
                th.prev('.cnt').html(data);
            })
        })
    </script>
    </body>

</html>
