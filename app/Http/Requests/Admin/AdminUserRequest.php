<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
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
            'email'=> 'required|email',
            'password_raw'=> 'required',
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
            'email.required' => '邮箱必填',
            'email.email' => '邮箱格式不对',
            'password_raw.required' => '原密码必填',
            'password.required' => '密码必填',
            'password.min' => '密码不足6位',
            'password.confirmed' => '密码和确认密码不一致',
            'password_confirmation.required' => '确认密码必填',
            'password_confirmation.min' => '确认密码不足6位',
        ];
    }

}
