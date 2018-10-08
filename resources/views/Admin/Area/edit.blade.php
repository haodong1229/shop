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
              <form action="/index_vip" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                  <input type="hidden" name="id" value="{{$a->id}}">
                   <div class="control-group">
                      <label class="control-label">收件人:</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="text" name="name" id="price" value="{{$a->nname}}">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">联系电话:</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="text" name="phone" id="price" value="{{$a->phone}}">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">地区:</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="text" name="area" id="price" value="{{$a->area}}">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="date" class="control-label">详细地址:</label>
                      <div class="controls">
                        <textarea rows="3" name="address">{{$a->address}}</textarea>
                      </div>
                    </div>                  
                </div>
              </div>
                <div class="form-actions">
                  {{csrf_field()}}
                  <input type="submit" class='btn btn-primary' value="保存">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
@endsection
