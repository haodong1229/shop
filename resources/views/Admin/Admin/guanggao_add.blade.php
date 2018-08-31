@extends("Admin.AdminPublic.public")
@section('admin')
<!doctype html>
<html>
  <head>
  </head>
  <body>
<div class="span12">
  <div class="box">
    <div class="box-head">
      <h3>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">广告上传</font></font>
      </h3>
    </div>
    <div class="box-content">
        <form method="post" action="/guanggao_index" enctype="multipart/form-data">
          {{csrf_field()}}
          请选择广告图片:<br><input type="file" name="img">
          <br><br>
          <button class="btn btn-success">添加</button>
        </form>
    </div>
  </div>
</div>
  </body>
</html>
@endsection