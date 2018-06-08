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

        $user = AdminUser::paginate(15);

        return view('admin.user.index',compact('user'));

    }

    // 创建用户
    public function create() {

        return view('admin.user.create');

    }

    // 创建用户--存储行为
    public function createStore(Request $request){

        $this->validate(\request(),[
            'name'=> 'required'
        ]);

        AdminUser::create(array_merge($request->except(['_token','password']),['password'=>bcrypt($request->get('password'))]));

        return back();

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
    public function role(AdminUser $user){

        $roles = AdminRole::all();

        $myRoles = $user->roles;

        return view('admin.user.role',compact('roles','myRoles','user'));

    }

    // 存储用户角色
    public function storeRole(AdminUser $user){

        $this->validate(\request(),[
            'roles'=> 'required|array'
        ]);

        $roles = AdminRole::findMany(\request('roles'));
        $myRoles = $user->roles;

        // 需要增加的
        $addRoles = $roles->diff($myRoles);
        foreach ($addRoles as $role){
            $user->assignRole($role);
        }

        // 要删除的
        $deleteRoles = $myRoles->diff($roles);
        foreach ($deleteRoles as $role){
            $user->deleteRole($role);
        }

        return back();

    }

}
