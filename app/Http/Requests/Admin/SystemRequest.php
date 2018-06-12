<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SystemRequest extends FormRequest
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
            'app_name'=>'required',
            'app_debug'=>'required',
            'app_url'=>'required',

            'db_connection'=>'required',
            'db_host'=>'required',
            'db_port'=>'required',
            'db_database'=>'required',
            'db_username'=>'required',

            'cache_driver'=>'required',
            'session_driver'=>'required',

            'home_name'=>'required',
            'home_url'=>'required',
            'admin_name'=>'required',
            'admin_url'=>'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '框架系统必填',
            'app_debug.required' => '开启DEBUG必填',
            'app_url.required' => '系统URL必填',

            'db_connection.required' => '数据库必填',
            'db_host.required' => '数据库地址必填',
            'db_port.required' => '数据端口号必填',
            'db_database.required' => '数据库名称必填',
            'db_username.required' => '数据库账号必填',

            'cache_driver.required' => '缓存配置必填',
            'session_driver.required' => 'SESSION配置必填',

            'home_name.required' => '系统前台名称必填',
            'home_url.required' => '系统前台URL必填',
            'admin_name.required' => '系统前后台称必填',
            'admin_url.required' => '系统后台URL必填',
        ];
    }
}
