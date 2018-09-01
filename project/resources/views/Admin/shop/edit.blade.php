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
              <h2>商品信息修改</h2>
            </div>
            <div class="box-content">
              <form action="/shop/{{$data->gid}}" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    <div class="control-group">
                      <label for="username" class="control-label">商品名称</label>
                      <div class="controls">
                        <input type="text" name="gname" id="gname" value="{{$data->gname}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="username" class="control-label">商品种类</label>
                      <div class="controls">
                        <select name="tid">
                          <option>--请选择--</option>
                          @foreach($datas as $row)
                            <option value="{{$row->tid}}" @if($data->tid==$row->tid) selected @endif>{{$row->tname}}</option>
                          @endforeach
                       </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">商品价格</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="text" name="price" id="price" value="{{$data->price}}">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">商品库存</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="text" name="stock" id="repassword" value="{{$data->stock}}">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="email" class="control-label">商品缩略图<i class="icon-envelope"></i></label>
                      <div class="controls">
                        <img src="{{$data->gpic}}" width="40px" height="60px">
                        <div class="input-append">
                          <input type='file' name='gpic' value="">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">商品状态</label>
                      <div class="controls">                        
                          新品 <input type="radio" name="status" value="0" @if($data->status==0) checked @endif> 
                          上架 <input type="radio" name="status" value="1" @if($data->status==1) checked @endif> 
                          下架 <input type="radio" name="status" value="2" @if($data->status==2) checked @endif>  
                          特殊 <input type="radio" name="status" value="3" @if($data->status==3) checked @endif>                      
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="date" class="control-label">商品描述</label>
                      <div class="controls">
                        <textarea rows="4" name="gdesc">{{$data->gdesc}}</textarea>
                      </div>
                    </div>                   
                </div>
              </div>
                <div class="form-actions">
                <form action="/shop/{{$data->gid}}" method="post" enctype="multipart/form-data">
                  {{method_field('put')}}
                  {{csrf_field()}}
                  <input type="submit" class='btn btn-primary' value="Save">
                </form>
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
