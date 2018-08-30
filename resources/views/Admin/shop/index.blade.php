@extends("Admin.AdminPublic.public")
@section('admin')
<!DOCTYPE html>
<html>
 <head> 
 </head> 
 <body> 
  <div class="row-fluid"> 
   <div class="span12"> 
    <div class="box"> 
     <div class="box-head tabs"> 
      <h2>商品信息总览</h2> 
      <form action="/shop"> 
       <ul class="nav nav-tabs"> 
        <li> <input type="text" name="keyword"> </li> 
        <li> <input type="submit" value="搜索" class="btn btn-info" /> </li> 
       </ul> 
      </form> 
     </div> 
     <div class="box-content box-nomargin"> 
      <div class="tab-content"> 
       <div class="tab-pane active" id="basic"> 
        <table class="table table-striped dataTable table-bordered"> 
         <thead> 
          <tr> 
           <th>商品名称</th> 
           <th>商品类别</th> 
           <th>图片</th> 
           <th>价格</th> 
           <th>库存</th> 
           <th>商品描述</th> 
           <th>状态</th> 
           <th>操作</th> 
          </tr> 
         </thead> 
         <tbody>
           @foreach($data as $row) 
          <tr> 
           <td width="300px">{{$row->gname}}</td> 
           <td width="60px">{{$row->tname}}</td> 
           <td width="100px"><img src="{{$row->gpic}}" width="60px" height="40px" /></td> 
           <td>{{$row->price}}</td> 
           <td>{{$row->stock}}</td> 
           <td width="250px">{{$row->gdesc}}</td> 
           <td> @if($row->status==0) 新品 @elseif($row->status==1) 上架 @elseif($row->status==2) 下架 @elseif($row->status==3) 特殊 @endif </td> 
           <td> 
            <form action="/shop/{{$row->gid}}/edit"> 
             <button>修改</button> 
            </form> 
            <form action="/shop/{{$row->gid}}" method="post"> 
            	{{csrf_field()}}
            	{{method_field('DELETE')}}
             <button>删除</button> 
            </form> </td> 
          </tr> @endforeach 
         </tbody> 
        </table>
        <div class="dataTables_paginate paging_full_numbers" id="pages">
      		{{$data->appends($request)->render()}}
     	</div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
 </body>
</html>
@endsection