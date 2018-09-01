@extends("Admin.AdminPublic.public")
@section('admin')
<!doctype html>
<html>
  <head>
  </head>
  <body>
        <div class="span12">
  <div class="box">
    <div class="box-head tabs">
      <h3>广告首页</h3></div>
    <div class="box-content box-nomargin">
     
      <table class="table table-striped table-media table-bordered">
        <thead>
          <tr>
            <th>广告id</th>
            <th>首页广告图片(只可以显示一张图片)</th>
            <th>广告操作</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($list as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td><img src="{{$row->img}}" style="width:50%;"></td>
            <td>
              <form action="/guanggao_index/{{$row->id}}" method='post'>
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button class="btn btn-danger">删除</button>
              </form>
              <a href="/guanggao_index/create" class="btn btn-info">添加新的广告</a>
            </td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

          
  </body>
</html>
@endsection