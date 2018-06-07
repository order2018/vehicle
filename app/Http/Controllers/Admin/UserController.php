<?php

namespace App\Http\Controllers\Admin;

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
    public function role(\App\AdminUser $user){

        $roles = \App\AdminRole::all();

        $myRoles = $user->roles;

        return view('admin.user.role',compact('roles','myRoles','user'));

    }

    // 存储用户角色
    public function storeRole(){

    }

}
