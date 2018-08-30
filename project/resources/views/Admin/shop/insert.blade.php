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
              <h2>商品信息添加</h2>
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
              <form action="/shop" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    <div class="control-group">
                      <label for="username" class="control-label">商品类别</label>
                      <div class="controls">
                       <select name="tid">
                          <option>--请选择--</option>
                          @foreach($data as $row)
                            <option value="{{$row->tid}}">{{$row->tname}}</option>
                          @endforeach
                       </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="username" class="control-label">商品名称</label>
                      <div class="controls">
                        <input type="text" name="gname" id="gname" placeholder="Shopname">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">商品价格</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="text" name="price" id="price" placeholder="ShopPrice">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">商品库存</label>
                      <div class="controls">
                        <div class="input-append">
                          <input type="text" name="stock" id="repassword" placeholder="ShopStock">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="email" class="control-label">商品缩略图<i class="icon-envelope"></i></label>
                      <div class="controls">
                        <div class="input-append">
                          <input type='file' name='gpic' value="">
                        </div>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">商品状态</label>
                      <div class="controls">                        
                          新品 <input type="radio" name="status" value="0"> 
                          上架 <input type="radio" name="status" value="1"> 
                          下架 <input type="radio" name="status" value="2">  
                          特殊 <input type="radio" name="status" value="3">                      
                      </div>
                    </div>
                    <div class="control-group">
                      <label for="date" class="control-label">商品描述</label>
                      <div class="controls">
                        <textarea rows="4" name="gdesc"></textarea>
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
