@extends("Admin.AdminPublic.public")
@section('admin')
 <table class="table table-striped dataTable table-bordered"> 
         <thead> 
          <tr>
           <th>用户名</th>
           <th>用户头像</th> 
           <th>真实姓名</th> 
           <th>手机号</th> 
           <th>地区</th>
           <th>性别</th> 
           <th>操作</th>
          </tr> 
         </thead> 
         <tbody> 
          <thead>
          @foreach ($users as $row)
           <tr>
            <td>{{$row->nname}}</td>
            <td><img src="{{$row->face}}" width="60" ></td>
            <td>{{$row->rname}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->area}}</td>
            <td>@if($row->sex=='x')男  @elseif ($row->sex=='w') 女 @else 未知@endif</td>
            <td>
              <a href="/index_vip/{{$row->uid}}" class="btn btn-info">收货信息</a>
            </td>
           </tr>
          @endforeach
          </thead>
        
         </tbody> 

        </table>
        <div class="dataTables_paginate paging_full_numbers " id="pages" >
          {{$users->render()}}
        </div>
      
@endsection