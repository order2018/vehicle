<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Common\Common;
use App\Http\Requests\Admin\BasicRequest;
use App\Http\Requests\Admin\SystemRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    // 基本设置
    public function index(){

        return view('admin.basic.index',['data'=>Basic::find(1)]);

    }

    // 基本设置--存储行为
    public function store(BasicRequest $request,Common $common){

        $result = $common->publicFunction->EditUpdatePicture('\App\Basic','id','basic_picture');

        if ($result) {

            return $common->jump('更新成功！','basic');

        }else{

            return $common->jump('更新失败！');

        }

    }

    // 系统设置
    public function system(){

        return view('admin.basic.system',['data'=>Basic::find(1)]);

    }

    // 系统设置--存储行为
    public function systemStore(SystemRequest $request){

        try{

            // 更新数据表
            Basic::whereId($request['id'])->update($request->except(['_token']));

            // 更新.env文件
            $data = [
                'APP_NAME' => $request['app_name'],
                'APP_DEBUG' => $request['app_debug'],
                'APP_URL' => $request['app_url'],

                'DB_CONNECTION' => $request['db_connection'],
                'DB_HOST' => $request['db_host'],
                'DB_PORT' => $request['db_port'],
                'DB_DATABASE' => $request['db_database'],
                'DB_USERNAME' => $request['db_username'],
                'DB_PASSWORD' => $request['db_password'],
                'DB_PREFIX' => $request['db_prefix'],

                'CACHE_DRIVER' => $request['cache_driver'],
                'SESSION_DRIVER' => $request['session_driver'],

                'HOME_NAME' => $request['home_name'],
                'ADMIN_NAME' => $request['admin_name'],
                'HOME_URL' => $request['home_url'],
                'ADMIN_URL' => $request['admin_url'],
            ];

            // 使用函数更新
            $this->modifyEnv($data);

            return app('common')->jump('更新成功！','system');

        }catch (\Exception $e){

            return app('common')->jump('更新失败！');

        }

    }

    // 修改.env配置文件方法
    function modifyEnv(array $data)
    {
        $envPath = base_path() . DIRECTORY_SEPARATOR . '.env';

        $contentArray = collect(file($envPath, FILE_IGNORE_NEW_LINES));

        $contentArray->transform(function ($item) use ($data){
            foreach ($data as $key => $value){
                if(str_contains($item, $key)){
                    return $key . '=' . $value;
                }
            }

            return $item;
        });

        $content = implode($contentArray->toArray(), "\n");

        File::put($envPath, $content);
    }

}
