@extends('home.public.public_shopping')
@section('title','购物车')

@section('mail')
<table class="" width='800' id="tab"> 
        
         <thead> 
          <tr>
           <th><button class="btn btn-info quanxuan">全选</button></th>
           <th>商品名称</th>
           <th>单价</th> 
           <th>数量</th> 
           <th>优惠</th> 
           <th>小计</th> 
           <th>操作</th>
          </tr> 
         </thead> 
         <tbody> 
          <thead>
           
          @foreach(session("comt") as $row)
          
           <tr class="abc">   
           <td width="100"><input type="checkbox" checked value="{{$row->cid}}" class="inp"></td>
            <td width='130'><img src="{{$row->gpic}}" width="50" >&nbsp &nbsp{{$row->gname}}</td>
            <td>{{$row->price}}</td>
            <td width='120'><a href="/shopping/create?id={{$row->cid}}" class="decrease track" >+</a><input class="modify-product-qty" type="text" value="{{$row->cnt}} "><a href="/plus?id={{$row->cid}}" class="increase track" >-</a></td>
            <td>-</td>
            <td>{{$row->cnt*$row->price}}</td>
            <td><input type='hidden' value='{{$row->cid}}' class="oid"><button class="an">删除</button></td>
           </tr>

          @endforeach
          <tr><td><input type="hidden" value="{{$row->cid}}" class="zhi" ><button class="gouxuan">结算</button></td></tr>
          </thead>
        
         </tbody> 
         
        
        </table>

   <script type="text/javascript">
       // alert($);

       
      
      $('.an').click(function(){
        a=$(this);

        cid=$(this).prev().val();
        // alert(cid);
        $.get('/spdel',{cid:cid},function(data){
          // alert(data);
          
          if(data==null){
            alert('删除失败');
             
          }else{
            
            a.parents('.abc').remove();
            tot.html(data);
             alert('删除成功');
          }
           
          
        });
      });
      $(".gouxuan").click(function(){

         cip=[];
         $('#tab').find("tr").each(function(){
             a=$(this).find(".inp").attr('checked');
             // alert(a);
             if(!a){
                
                a=$(this).find(".inp").val();
                cip.push(a);
                // alert(cip);   
             }
             
         })
          // alert(cip);
            $.get('/zhi',{cip:cip},function(data){
                     // alert(data);
                });

      });


         
        
   </script>

@endsection
           
