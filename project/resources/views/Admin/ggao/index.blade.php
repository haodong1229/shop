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
      <h2>公告信息总览</h2> 
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
        <table class="table table-striped dataTable table-bordered" id="tl"> 
         <thead> 
          <tr> 
           <th>选项</th> 
           <th>公告ID</th> 
           <th>公告题目</th> 
           <th>公告内容</th> 
           <th>操作</th> 
          </tr> 
         </thead> 
         <tbody>
          @foreach($data as $row)
          <tr>  
           <td style="text-align:center;"><input type="checkbox" name="{{$row->id}}" class="cid"></td> 
           <td>{{$row->id}}</td> 
           <td>{{$row->title}}</td> 
           <td>{{$row->content}}</td> 
           <td> 
            <form action="/gao/{{$row->id}}/edit"> 
             <button>修改</button> 
            </form> 
            <form action="/gao/{{$row->id}}" method="post"> 
            	{{csrf_field()}}
            	{{method_field('DELETE')}}
             <button>删除</button> 
            </form> </td> 
          </tr>
          @endforeach 
          <tr>
            <td colspan="5">
             <button id="all">全选</button>
             <button id="alno">反选</button>
             <button id="allno">全不选</button>
             <button id='del'>删除</button>
            </td>
          </tr> 
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
 <script>
      $('#all').click(function(){
        a=$(".cid").attr('checked',true);
        //alert(a);
      });

      $('#alno').click(function(){
        $('#tl').find('tr').each(function(){
          if($(this).find('.cid').attr('checked')){
            $(this).find('.cid').attr('checked',false);
          }else{
            $(this).find('.cid').attr('checked',true);
          }
        });
      });

      $('#allno').click(function(){
        $('.cid').attr('checked',false);
      });

      b=[];
      $('#del').click(function(){
        $('#tl').find('tr').each(function(){
            if($(this).find('.cid').attr('checked')){
              a=$(this).find('.cid').attr('name');
              b.push(a);
            }
        });

        $.get('/del',{b:b},function(data){
            for(i=0;i<b.length;i++){
              $("input[name='"+b[i]+"']").parents('tr').remove();
            }
        })
      });
 </script>
</html>
@endsection