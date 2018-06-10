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
        return app('common')->jump('添加成功！','permission');

    }

    // 删除权限
    public function delete($id) {

        try{

            AdminPermission::destroy($id);
            return app('common')->jump('删除成功！','permission');

        }catch (\Exception $e){

            return app('common')->jump('删除失败！');

        }

    }
}
