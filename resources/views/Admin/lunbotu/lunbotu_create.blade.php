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
          <font style="vertical-align: inherit;">轮播图上传</font></font>
      </h3>
    </div>
    <div class="box-content">
        <form method="post" action="/lunbotu_index" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="box-content box-nomargin"> 
      <div class="tab-content"> 
       <div class="tab-pane active" id="basic"> 
        <table class="table table-striped dataTable table-bordered"> 
         <thead> 
            
         </thead> 
         <tbody>
            
          <tr> 
           <td width="300px">请选择轮播图1:</td> 
           <td width="600px"><input type="file" name="img1"></td> 
          </tr>
           <tr> 
           <td width="300px">请选择轮播图2:</td> 
           <td width="600px"><input type="file" name="img2"></td> 
          </tr>
           <tr> 
           <td width="300px">请选择轮播图3:</td> 
           <td width="600px"><input type="file" name="img3"></td> 
          </tr>
           <tr> 
           <td width="300px">请选择轮播图4:</td> 
           <td width="600px"><input type="file" name="img4"></td> 
          </tr>
           <tr> 
           <td width="300px">请选择轮播图5:</td> 
           <td width="600px"><input type="file" name="img5"></td> 
          </tr>
           <tr> 
           <td width="300px">请选择轮播图6:</td> 
           <td width="600px"><input type="file" name="img6"></td> 
          </tr>
         </tbody> 
        </table>
        <div class="dataTables_paginate paging_full_numbers" id="pages">
          
      </div> 
       </div> 
      </div> 
     </div>
          <button class="btn btn-success">添加</button>
        </form>
    </div>
  </div>
</div>
  </body>
</html>
@endsection