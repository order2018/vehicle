<?php

namespace App\Http\Controllers\Admin;

use App\AdminPermission;
use App\AdminRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

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
    public function edit(AdminRole $id) {

        return view('admin.role.edit',compact('id'));

    }

    // 编辑角色--存储行为
    public function editStore(Request $request){

        $this->validate($request,[
            'name'=>'required|min:3',
            'description'=>'required',
        ],[
            'name.required' => '名称必填',
            'name.min' => '名称不必太长',
            'description.required' => '描述必填',
        ]);

        AdminRole::whereId($request['id'])->update($request->except(['_token']));
        return app('common')->jump('添加成功！','role');

    }

    // 删除角色
    public function delete($id) {

        try{
            // 判断超级管理员无法删除
            if ($id=="1"){
                return app('common')->jump('此记录无法删除！','role');
            }else{
                // 1.删除角色用户表关联的数据
                $roleUser = \DB::table('admin_role_users')->where('role_id',$id)->get()->map(function ($value) { return (array)$value; })->toArray();
                foreach ($roleUser as $roleUsers){
                    \DB::table('admin_role_users')->where(['id'=>$roleUsers['id'],'role_id'=>$id])->delete();
                }

                // 2.删除权限角色关联的数据
                $result = \DB::table('admin_permission_roles')->where('role_id',$id)->get()->map(function ($value) { return (array)$value; })->toArray();
                foreach ($result as $val){
                    \DB::table('admin_permission_roles')->where(['id'=>$val['id'],'role_id'=>$id])->delete();
                }

                // 3.删除角色数据
                AdminRole::destroy($id);

                return app('common')->jump('删除成功！','role');
            }

        }catch (\Exception $e){

            return app('common')->jump('删除失败！');

        }

    }

    // 角色权限关系页面
    public function permission(AdminRole $role) {

        // 获取所以权限
        $permissions = AdminPermission::all();
        // 获取当前角色权限
        $myPermissions = $role->permissions;

        return view('admin.role.permission',compact('permissions','myPermissions','role'));

    }

    // 存储角色权限行为
    public function storePermission(AdminRole $role){

        try{

            $this->validate(\request(),[
                'permissions'=> 'required|array'
            ]);

            $permissions = AdminPermission::findMany(\request('permissions'));
            $myPermissions = $role->permissions;

            // 对已经有的权限
            $addPermissions = $permissions->diff($myPermissions);
            foreach ($addPermissions as $permission){
                $role->grantPermission($permission);
            }

            // 删除的权限
            $deletePermissions = $myPermissions->diff($permissions);
            foreach ($deletePermissions as $permission){
                $role->deletePermission($permission);
            }

            return app('common')->jump('分配成功！','role');

        }catch (\Exception $e){

            return app('common')->jump('分配失败！');

        }

    }

}
