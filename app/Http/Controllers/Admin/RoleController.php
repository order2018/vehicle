<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    // 角色首页
    public function index() {

        return view('admin.role.index');

    }

    // 创建角色
    public function create() {

        return view('admin.role.create');

    }

    // 创建角色--存储行为
    public function createStore(Request $request){

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

}
