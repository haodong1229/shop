@extends("Admin.AdminPublic.public")
@section('admin')

<table class="table table-striped dataTable table-bordered"> 
  <tr>
    <th>收货人</th>
    <th>邮编</th>
    <th>地区</th>
    <th>详细地址</th>
    <th>电话</th>
    <!-- <th>操作</th> -->
  </tr>
 @foreach ($address as $row)
  <tr>
     <td>{{$row->name}}</td>
     <td>{{$row->emai}}</td>
     <td>{{$row->area}}</td>
     <td>{{$row->address}}</td>
     <td>{{$row->phone}}</td>
     <!-- <td><a href="/index_vip/{{$row->id}}/edit">修改信息</a></td> -->
  </tr>
 @endforeach
</table>
@endsection