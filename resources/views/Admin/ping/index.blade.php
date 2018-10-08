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
      <h2>评论信息总览</h2> 
      <form action="/ping"> 
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
           <th>ID</th> 
           <th>用户</th> 
           <th>评论内容</th>
           <th>评论商品</th>  
           <th>操作</th> 
          </tr> 
         </thead> 
         <tbody>
            @foreach($data as $row)
          <tr> 
           <td>{{$row->jid}}</td> 
           <td>{{$row->uname}}</td> 
           <td>{{$row->content}}</td>
           <td>{{$row->gname}}</td>  
           <td>  
            <form action="/ping/{{$row->jid}}" method="post"> 
            	{{csrf_field()}}
            	{{method_field('DELETE')}}
             <button>删除</button> 
            </form> </td> 
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