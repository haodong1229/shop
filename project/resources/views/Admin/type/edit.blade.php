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
      <h2>商品分类添加</h2>  
     </div> 
     <div class="box-content box-nomargin"> 
      <div class="tab-content"> 
       <div class="tab-pane active" id="basic"> 
        	
<center>
  @foreach($data as $row)
    <form class="mws-form" action="/cate/{{$row->tid}}" method="post">
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">分类名</label> 
       <div class="mws-form-item"> 
          <input type="text" name="tname" class="large" value="{{$row->tname}}" /> 
         @endforeach
       </div> 
      </div> 
     </div> 
     <div class="mws-button-row"> 
      <form action="/cate/{{$row->tid}}" method="post">
              {{csrf_field()}}
              {{method_field("PUT")}}
           <button class="btn btn-info">修改</button>
      </form>
     </div> 
    </form> 
   <center>

       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
 </body>
</html>	
@endsection
