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
              <h3>管理员修改</h3>
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
              <form action="/admin_userlist/{{$user->id}}" class="form-horizontal" method="post">
              	{{csrf_field()}}
                {{method_field('PUT')}}
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    
                    <div class="control-group">
                      <label for="username" class="control-label">管理员姓名</label>
                      <div class="controls">
                        <input type="text" name="username" value="{{$user->username}}" id="username" placeholder="输入你的管理员姓名">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="username" class="control-label">管理员密码</label>
                      <div class="controls">
                        <input type="text" name="password" id="username" placeholder="输入8-16位管理员密码">
                      </div>
                    </div>
        
                </div>
              </div>
                <div class="form-actions">
                  <input type="submit" class='btn btn-primary' value="修改">
               
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
@endsection