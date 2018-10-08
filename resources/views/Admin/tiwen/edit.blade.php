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
     @if(count($errors)>0)
        <div class="alert alert-danger">
          <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        </div>
      @endif 
      <div class="tab-content"> 
       <div class="tab-pane active" id="basic"> 
<center>
       	<form class="mws-form" action="/tiwen/{{$data->tiid}}" method="post">
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">问题</label> 
       <div class="mws-form-item"> 
        <input type="text" name="content" class="large" value="{{$data->content}}" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">解答</label> 
       <div class="mws-form-item"> 
        <textarea rows="10" name="ask"></textarea> 
       </div> 
      </div> 
     </div> 
     <div class="mws-button-row"> 
      {{method_field('PUT')}}
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
