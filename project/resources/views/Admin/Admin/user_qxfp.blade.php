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
              <h3>管理员权限修改</h3>
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
              <form action="/purview_baocun" class="form-horizontal" method="post">
              	{{csrf_field()}}
                
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    
                    <div class="control-group">
                      <label for="username" class="control-label">管理员名字:{{$list->username}}</label>
                      <br><span width="40px">&nbsp;&nbsp;&nbsp;&nbsp;</span>

                      @foreach($pur as $p)
                       {{$p->name}}
                        <div class="checker" id="uniform-check2">
                          <span class="checked">
                          <input type="checkbox" @if(in_array($p->id,$rids)) checked @endif class="uniform" name="rid" value="{{$p->id}}" id="check2" style="opacity:0;">
                        </span>
                         </div>
                      @endforeach

                    </div>


                </div>
              </div>
                <div class="form-actions">
                  <input type="hidden" name="uid" value="{{$list->id}}">
                  <input type="submit" class='btn btn-primary' value="分配">
               
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
@endsection