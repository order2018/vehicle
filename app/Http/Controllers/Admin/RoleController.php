<?php

namespace App\Http\Controllers\Admin;

use App\AdminPermission;
use App\AdminRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    // 角色首页
    public function index() {

        $roles = AdminRole::paginate(15);

        return view('admin.role.index',compact('roles'));

    }

    // 创建角色
    public function create() {

        return view('admin.role.create');

    }

    // 创建角色--存储行为
    public function createStore(){

        $this->validate(\request(),[
            'name'=>'required|min:3',
            'description'=>'required',
        ]);

        AdminRole::create(\request(['name','description']));

        return redirect()->route('role');
    }

    // 编辑角色
    public function edit($id) {

        return view('admin.role.edit');

    }

    // 编辑角色--存储行为
    public function editStore(Request $request){

    }

    // 删除角色
    public function delete($id) {


    }

    // 角色权限关系页面
    public function permission(AdminRole $adminRole,$role) {

        // 获取所以权限
        $permissions = AdminPermission::all();
        // 获取当前角色权限
        $myPermissions = $adminRole->permissions;

        return view('admin.role.permission',compact('permissions','myPermissions','role'));

    }

    // 存储角色权限行为
    public function storePermission(AdminRole $adminRole){

        $this->validate(\request(),[
           'permissions'=> 'required|array'
        ]);

        $permissions = AdminPermission::findMany(\request('permissions'));
        $myPermissions = $adminRole->permissions;

        // 对已经有的权限
        $addPermissions = $permissions->diff($myPermissions);
        foreach ($addPermissions as $permission){
            $adminRole->grantPermission($permission);
        }

        // 删除的权限
        $deletePermissions = $myPermissions->diff($permissions);
        foreach ($deletePermissions as $permission){
            $adminRole->deletePermission($permission);
        }

        return back();

    }

}
