@extends("Admin.AdminPublic.public")
@section('admin')
<!doctype html>
<html>
  
  <head></head>
  
  <body>
    <div class="row-fluid">
      <div class="span12">
        <div class="box">
          <div class="box-head tabs">
            <h2>权限信息总览</h2>
            
          </div>
          <div class="box-content box-nomargin">
            <div class="tab-content">
              <div class="tab-pane active" id="basic">
                <table class='table table-striped dataTable table-bordered'>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>管理员</th>
                      <th>权限</th>
                      <th>操作</th></tr>
                  </thead>
                  <tbody>
                  	@foreach($list as $row)
                    <tr>
                      <td>{{$row->uid}}</td>
                      <td>{{$row->username}}</td>
                      <td>{{$row->name}}</td>
                      <td>
                        <a href="/admin_quanxian/{{$row->rid}}/edit" class="btn btn-success">设置权限</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection