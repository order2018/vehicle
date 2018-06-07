<?php

namespace App\Http\Controllers\Admin;

use App\AdminPermission;
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
    public function createStore(){

        $this->validate(\request(),[
            'name'=>'required|min:3',
            'description'=>'required',
        ]);

        AdminPermission::create(\request(['name','description']));

        return redirect()->route('permission');

    }

    // 编辑权限
    public function edit($id) {

        return view('admin.permission.edit');

    }

    // 编辑权限--存储行为
    public function editStore(Request $request){

    }

    // 删除权限
    public function delete($id) {


    }
}
