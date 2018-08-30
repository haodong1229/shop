@extends("Admin.AdminPublic.public")
@section('admin')
<!doctype html>
<html>
  <head>
  </head>
  <body>
   <div class="row-fluid">
        <div class="span12">
          <div class="box">
            <div class="box-head tabs">
              <h3>权限设置</h3>
            </div>
            <div class="box-content">
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
              <form action="/admin_quanxian/{{$role->id}}" class="form-horizontal" method="post">
              	{{csrf_field()}}
                {{method_field("PUT")}}
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    
                    <div class="control-group">
                      <label for="username" class="control-label"><h5>当前角色:{{$role->name}}</h5></label>
                      <br>
                      <span width="40px">&nbsp;&nbsp;&nbsp;&nbsp;</span>

                        @foreach($node as $row)
                        {{$row->name}}

                        
                          
                          <input type="checkbox"  @if(in_array($row->id,$nids)) checked @endif class="uniform" name="nid[]" value="{{$row->id}}" id="check2" >
                        
                        
                         @endforeach
                     
                    </div>

                </div>
              </div>
                <div class="form-actions">

                 <input type="hidden" name="rid" value="{{$role->id}}">
                 
                  <input type="submit" class='btn btn-primary' value="设置">
               
                </div>
              </form>
                
            </div>
          </div>
        </div>
      </div>
  </body>
  <script type="text/javascript">
   
  </script>
</html>
@endsection