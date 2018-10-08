<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeUserLogin extends FormRequest
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
            //判断登录页面的用户名，密码格式
            'uname'=>'required|regex:/\w{4,8}/',
            'upass'=>'required|regex:/\w{6,14}/'
        ];
    }

    //自定义错误消息
    public function messages(){
        return[
            'uname.required'=>'用户名不能为空',
            'uname.regex'=>'用户名必须为4-8位的任意数字字母下划线',
            'upass.required'=>'密码不能为空',
            'upass.regex'=>'密码必须为8-16位的任意数字字母下划线'
              ];
    }
}
