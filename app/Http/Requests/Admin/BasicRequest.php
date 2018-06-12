<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BasicRequest extends FormRequest
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
            'basic_name'=>'required',
            'basic_tel'=>'required',
            'basic_phone'=>'required',
            'basic_add'=>'required',
            'basic_number'=>'required',
            'basic_title'=>'required',
            'basic_keyword'=>'required',
            'basic_description'=>'required',
            'basic_author'=>'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'basic_name.required' => '公司名称必填',
            'basic_tel.required' => '电话必填',
            'basic_phone.required' => '手机必填',
            'basic_add.required' => '地址必填',
            'basic_number.required' => '备案号必填',
            'basic_title.required' => '标题必填',
            'basic_keyword.required' => '关键字必填',
            'basic_description.required' => '描述必填',
            'basic_author.required' => '作者必填',
        ];
    }
}
