@extends("Admin.AdminPublic.public")
@section('admin')
<!DOCTYPE html>
<html>
 <head> 
 </head> 
 <body> 
  <div class="v-fluid"> 
   <div class="span12"> 
    <div class="box"> 
     <div class="box-head tabs"> 
      <h2>商品分类总览</h2> 
 
     </div> 
     <div class="box-content box-nomargin"> 
      <div class="tab-content"> 
       <div class="tab-pane active" id="basic"> 
        <table class="table table-striped dataTable table-bordered"> 
         <thead> 
          <tr>
           <th>Id</th>
           <th>用户名称</th> 
           <th>商品名称</th> 
           <th>提问问题</th> 
           <th>提问问题</th>
           <th>操作</th> 
          </tr> 
         </thead> 
         <tbody> 
          @foreach($data as $v)
          <tr> 
           <td>{{$v->tiid}}</td> 
            <td>{{$v->uname}}</td>
           <td>{{$v->gname}}</td>
           <td> @if($v->status==0) 未解决 @elseif($v->status==1) 已解决 @endif </td> 
           <td>{{$v->content}}</td> 
           <td>

          <a href="/tiwen/{{$v->tiid}}" class="btn btn-danger">回答</a></td>  
          </tr>
        @endforeach
         </tbody> 
        </table>
        <div class="dataTables_paginate paging_full_numbers" id="pages">
      
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
