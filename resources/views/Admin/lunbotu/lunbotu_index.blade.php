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
      <h3>轮播图首页</h3></div>
    <div class="box-content box-nomargin">
     
      <table class="table table-striped table-media table-bordered">
        <thead>
          <tr>
            <th>轮播图id</th>
            <th>轮播图图片</th>
            <th>轮播图名字</th>
            
          </tr>
        </thead>
        <tbody>
          
          @foreach($data as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td><img src="{{$row->img}}" style="width:400px;height:300px;"></td>
            
          @endforeach
        </tbody>
      </table>

      <form action="/lunbotu_index/{{$row->id}}" method='post' style="float:right;">
          {{csrf_field()}}
          {{method_field("delete")}}
          <button class="btn btn-danger">删除全部</button>
      </form>
    </div>
  </div>
</div>

          
  </body>
</html>
@endsection