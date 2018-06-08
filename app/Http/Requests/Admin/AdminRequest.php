<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name'=> 'required',
            'email'=> 'required|email|unique:admin_users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '用户名必填',
            'email.required' => '邮箱必填',
            'email.email' => '邮箱格式不对',
            'email.unique' => '邮箱已经存在',
            'password.required' => '密码必填',
            'password.min' => '密码不足6位',
            'password.confirmed' => '密码和确认密码不一致',
            'password_confirmation.required' => '确认密码必填',
            'password_confirmation.min' => '确认密码不足6位',
        ];
    }

}
