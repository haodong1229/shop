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
       	<form class="mws-form" action="/cate" method="post">
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">分类名</label> 
       <div class="mws-form-item"> 
        <input type="text" name="tname" class="large" value="" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">父类</label> 
       <div class="mws-form-item"> 
        <select class="large" name="pid">
          <option value="0">--请选择--</option>
          @foreach($data as $row)
          <option value="{{$row->tid}}">{{$row->tname}}</option>
          @endforeach
        </select>
       </div> 
      </div> 
     </div> 
     <div class="mws-button-row"> 
      {{csrf_field()}}
      <input type="submit" value="Submit" class="btn btn-danger" /> 
      <input type="reset" value="Reset" class="btn " /> 
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
