<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //给表单校验授权
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //校验规则
    public function rules()
    {
        return [
            //会员名做规则设置
            'username'=>'required|regex:/\w{4,8}/|unique:admin_users',
            //密码和重复密码
            'password'=>'required|regex:/\w{8,16}/',
            'repassword'=>'required|regex:/\w{8,16}/|same:password',
        ];
    }

    //自定义错误消息
    public function messages(){
        return[
            'username.required'=>'用户名不能为空',
            'username.regex'=>'用户名必须为4-8位的任意数字字母下划线',
            'username.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须为8-16位的任意数字字母下划线',
            'repassword.required'=>'重复密码不能为空',
            'repassword.regex'=>'重复密码必须为8-16位的任意数字字母下划线',
            'repassword.same'=>'两次密码不一致',
              ];
    }
}
