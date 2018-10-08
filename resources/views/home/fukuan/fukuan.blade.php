  @extends('home.public.public');
  @section('title','请付款')
  @section('content')

  <div id="wrapper">
  <div id="content">
    <div class="order" data-product-codes="6374557" align="center">
      <!--提示框-->
      <!--提示框end-->
      <div>
        <div style="display: inline; float: left; width: 84%;">
          <div style="padding: 20px 0 30px; height: 10px">
            <div class="caption" style="font-size: 16px; color: black; padding-left: 0px;">订单已提交成功，您还需支付
              <span style="color: #a10000; font-size: 30px; font-weight: bold; text-align: center; width: 100%; display: inline;margin:8px">￥{{$total}}元</span>请您尽快完成付款！</div>
            <table style="display: none">
              <thead>
                <tr>
                  <th>订单号</th>
                  <th>需支付金额</th>
                  <th>支付方式</th>
                  <th>发货库房</th>
                  <th class="delivery-time">预计配送时间</th></tr>
              </thead>
              <tbody>
                <tr>
                  <td>80189400060661</td>
                  <td>
                    <span class="emphasize">￥146.00</span></td>
                  <td>在线支付</td>
                  <td>上海三库</td>
                  <td>发货后
                    <span>
                      <a target="_blank" href="http://help.vancl.com/category/transfer">2天</a></span>
                  </td>
                </tr>
              </tbody>
            </table>
            <div style="display: block; padding-top: 10px; margin-top: 20px;">订单号
              <a href="" target="_blank" style="color: #a10000;margin:5px">{{$oid}}</a>，
              <a href="http://m.vancl.com/m/d" target="_blank" style="color: #a10000;">下载客户端</a>，随时查看订单状态。</div></div>
        </div>
        <div style="display: inline; float: right; padding-left: 5px;">
          <img src="http://i2.vanclimg.com/header/20130116/weixin.png"></div>
        <span style="clear: both; display: block; padding: 0; margin: 0; height: 0"></span>
      </div>
      
</div>
  @endsection