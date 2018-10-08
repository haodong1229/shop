@extends("Admin.AdminPublic.public")
@section("admin")
<table class="table table-striped dataTable table-bordered" > 
<thead>
 <tr><td ><h4>订单详情</h4></td></tr>
  <tr>
    <th>ID</th>
    <th>用户名</th>
    <th>订单号</th>
    <th>商品图片</th>
    <th>成交价</th>
    <th>数量</th>
    <th>订单状态</th>
    <th>操作</th>

  </tr>
@foreach($data as $row)
  <tr>
    <td>{{$row->did}}</td>
    <td>{{$row->phone}}</td>
    <td>{{$row->oid}}</td>
    <td><img width='80'src="{{$row->gpic}}"></td>
    <td>{{$row->total}}</td>
    <td>{{$row->ocnt}}</td>
    <td>@if($row->dstatus==0)以下单  @elseif($row->dstatus==1)发货中.. @elseif($row->dstatus==2)待评价 @else($row->dstatus==3)以完成 @endif</td>
    <td width="100"><a class="btn btn-danger" href="/detail/{{$row->did}}/edit">修改</a>&nbsp&nbsp</td>
  </tr>
@endforeach
</thead>
</table>
<script type="text/javascript">
      
  $(".dele").click(function(){
    ab=$(this).val();   
    abc=$(this);
    $.get('/dele',{ab:ab},function(data){
       if(data==1){
        abc.parents('tr').remove();
          alert('订单销毁成功!');
       }else{
         alert('订单进行中..不可删除!');
       }
        
    });
  });
</script>

@endsection