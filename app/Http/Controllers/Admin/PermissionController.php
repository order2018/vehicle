<?php

namespace App\Http\Controllers\Admin;

use App\AdminPermission;
use App\Http\Requests\Admin\PermissionRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    // 权限首页
    public function index() {

        $permissions = AdminPermission::paginate(15);

        return view('admin.permission.index',compact('permissions'));

    }

    // 创建权限
    public function create() {

        return view('admin.permission.create');

    }

    // 创建权限--存储行为
    public function createStore(PermissionRequest $request){

        AdminPermission::create($request->getNameDescription());

        return app('common')->jump('添加成功！','permission');

    }

    // 编辑权限
    public function edit(AdminPermission $id) {

        return view('admin.permission.edit',compact('id'));

    }

    // 编辑权限--存储行为
    public function editStore(Request $request){

        $this->validate($request,[
            'name'=>'required|min:3',
            'description'=>'required',
        ],[
            'name.required' => '名称必填',
            'name.min' => '名称不必太长',
            'description.required' => '描述必填',
        ]);

        AdminPermission::whereId($request['id'])->update($request->except(['_token']));
        return app('common')->jump('更新成功！','permission');

    }

    // 删除权限
    public function delete($id) {

        try{
            // 判断系统设置，权限管理无法删除
            if ($id=="1"){
                goto del;
            }elseif($id=="2"){
                del:
                return app('common')->jump('此记录无法删除！','permission');
            }else{
                // 读取权限角色关系表转换数组
                $result = \DB::table('admin_permission_roles')->where('permission_id',$id)->get()->map(function ($value) { return (array)$value; })->toArray();
                foreach ($result as $val){
                    \DB::table('admin_permission_roles')->where(['id'=>$val['id'],'permission_id'=>$id])->delete();
                }
                AdminPermission::destroy($id);
                return app('common')->jump('删除成功！','permission');
            }

        }catch (\Exception $e){

           return app('common')->jump('删除失败！');

        }

    }
}
