<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'name'=>'required|min:3|unique:admin_permissions',
            'description'=>'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '邮箱必填',
            'name.unique' => '已经存在不能重复',
            'name.min' => '名称不必太长',
            'description.required' => '描述必填',
        ];
    }

    /**
     * 获取名称和描述
     * @return array|\Illuminate\Http\Request|string
     */
    public function getNameDescription()
    {
        return request(['name','description']);
    }
}
