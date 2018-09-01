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
              <h3>User profile</h3>
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
              <form action="/ce" class="form-horizontal" method="post">
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    <div class="control-group">
                      <label for="username" class="control-label">Username</label>
                      <div class="controls">
                        <input type="text" name="username" id="username" placeholder="MyUsername">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Password</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="password" name="password" id="password" placeholder="MyPassword">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">RePassword</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="password" name="repassword" id="repassword" placeholder="MyPassword">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Level</label>
                      <div class="controls">
                        <div class="input-append">
                          <select name="level">
                            <option>-请选择-</option>
                            <option value="0">-高级管理员-</option>
                            <option value="1">-中级管理员-</option>
                            <option value="2">-低级管理员-</option>
                          </select>
                        </div>
                      </div>
                    </div>                   
                </div>
                
                
              </div>
                <div class="form-actions">
                  {{csrf_field()}}
                  <input type="submit" class='btn btn-primary' value="Save">
                  <input type="reset" class='btn btn-danger' value="Reset">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	</body>
</html>
@endsection
