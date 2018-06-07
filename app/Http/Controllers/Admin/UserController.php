<?php

namespace App\Http\Controllers\Admin;

use App\AdminRole;
use App\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 用户首页
    public function index() {

        return view('admin.user.index');

    }

    // 创建用户
    public function create() {

        return view('admin.user.create');

    }

    // 创建用户--存储行为
    public function createStore(Request $request){

    }

    // 编辑用户
    public function edit($id) {

        return view('admin.user.edit');

    }

    // 编辑用户--存储行为
    public function editStore(Request $request){

    }

    // 删除用户
    public function delete($id) {


    }

    // 用户角色页面
    public function role(AdminUser $adminUser,$user){

        $roles = AdminRole::all();

        $myRoles = $adminUser->roles;

        return view('admin.user.role',compact('roles','myRoles','user'));

    }

    // 存储用户角色
    public function storeRole(AdminUser $adminUser){

        $this->validate(\request(),[
            'roles'=> 'required|array'
        ]);

        $roles = AdminRole::findMany(\request('roles'));
        $myRoles = $adminUser->roles;

        // 需要增加的
        $addRoles = $roles->diff($myRoles);
        foreach ($addRoles as $role){
            $adminUser->assignRole($role);
        }

        // 要删除的
        $deleteRoles = $myRoles->diff($roles);
        foreach ($deleteRoles as $role){
            $adminUser->deleteRole($role);
        }

        return back();

    }

}
