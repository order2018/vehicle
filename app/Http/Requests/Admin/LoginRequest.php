<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:6|max:10',
            'is_remember'=>'integer',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => '邮箱必填',
            'email.email' => '邮箱格式不对',
            'password.required' => '密码必填',
            'password.min' => '密码不足6位',
            'password.max' => '密码超出10位',
        ];
    }

    /**
     * 获取用户名密码
     * @return array|\Illuminate\Http\Request|string
     */
    public function getUser()
    {
        return request(['email','password']);
    }

    /**
     * 获取登录状态
     * @return bool
     */
    public function getRemember()
    {
        return boolval(request('is_remember'));
    }

}
