@extends("Admin.AdminPublic.public")
@section('admin')


            <div class="box-head tabs">
              <h2>物流状态修改</h2>
            </div>
              <form action="/detail/{{$data->did}}" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="tab-content">
                <div class="tab-pane active" id="basic">
                    <div class="control-group">
                      <label class="control-label">商品状态</label>
                      <div class="controls">                        
                          以下单<input type="radio" disabled name="status" value="0" @if($data->dstatus=='0') checked @endif>&nbsp
                           发货<input type="radio" name="status" value="1" @if($data->dstatus>='1') checked  disabled @endif>&nbsp 
                          待评价 <input type="radio" name="status" value="2" @if($data->dstatus>='2') checked disabled @endif>&nbsp 
                          订单完成<input type="radio" name="status" value="3" @if($data->dstatus=='3') checked   @endif>                      
                      </div>
                    </div>
                                      
                </div>
               
                {{ method_field('PUT') }}
                {{csrf_field()}}
                <input type="submit" class='btn btn-primary' value="保存修改">
                
                  <input type="reset" class='btn btn-danger' value="取消">
                </div>
            
             
         </form>
   

@endsection
