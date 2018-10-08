<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
              //会员名做规则设置
            'nname'=>'required',
            'rname'=>'required',
            'bYear'=>'required',
            'bMonth'=>'required',
            'bDay'=>'required',
            

            //邮箱
            'email'=>'email',
            //电话
            'phone'=>'required|regex:/\d{11}/'
        ];
    }
       //自定义错误消息
    public function messages(){
        return[
            'nname.required'=>'用户名不能为空',
            'rname.required'=>'用户名不能为空',
            'bYear.required'=>'年不能为空',
            'bMonth.required'=>'月不能为空',
            'bDay.required'=>'日不能为空',
        
 
        
            //邮箱
            'email.email'=>'邮箱格式不符合',
            //电话
            'phone.required'=>'电话不能为空',
            'phone.regex'=>'电话不符合规则'


              ];
    }
}
