@extends("Admin.AdminPublic.public")
@section('admin')
<!DOCTYPE html>
<html>
 <head> 
        <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script> 
        <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
        <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
        <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
        <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
 </head> 
 <body> 
  <div class="row-fluid"> 
   <div class="span12"> 
    <div class="box"> 
     <div class="box-head tabs"> 
      <h2>公告添加</h2>  
     </div> 
     <div class="box-content box-nomargin"> 
      <div class="tab-content"> 
       <div class="tab-pane active" id="basic"> 
   	
  <center>
    <form class="mws-form" action="/gao" method="post">
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">公告标题</label> 
       <div class="mws-form-item"> 
        <input type="text" name="title" class="large" value="" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">公告内容</label> 
       <div class="mws-form-item"> 
          <script id="editor" type="text/plain"  name="content" style="width:700px;height:500px;">
            
          </script>
           <script type="text/javascript">
               //实例化编辑器
               //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
               var ue = UE.getEditor('editor');
           </script>
       </div> 
      </div> 
     </div> 
     <div class="mws-button-row"> 
      {{csrf_field()}}
      <input type="submit" value="Submit" class="btn btn-danger" /> 
      <input type="reset" value="Reset" class="btn " /> 
     </div> 
    </form> 
   <center>

       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
 </body>
</html>	
@endsection
