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
      <h2>商品分类总览</h2> 
      <form action="#"> 
       <ul class="nav nav-tabs"> 
        <li> <input type="text" name="keywords" value="{{$keywords or ''}}"> </li> 
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
           <th>Id</th>
           <th>分类名称</th> 
           <th>pid</th> 
           <th>path</th> 
           <th>操作</th> 
          </tr> 
         </thead> 
         <tbody> 
         	@foreach($data as $row)
          <tr> 
           <td>{{$row->tid}}</td> 
           <td>{{$row->tname}}</td> 
           <td>{{$row->pid}}</td> 
           <td>{{$row->path}}</td> 
           <td>
           <form action="/cate/{{$row->tid}}" method="post">
	            {{csrf_field()}}
	            {{method_field("DELETE")}}
           <button class="btn btn-info">删除</button>
           </form>
          <a href="/cate/{{$row->tid}}/edit" class="btn btn-danger">修改</a></td>  
          </tr>
          	@endforeach
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
