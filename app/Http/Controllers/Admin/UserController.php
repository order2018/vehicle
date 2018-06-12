<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use App\AdminRole;
use App\AdminUser;
use App\Http\Requests\Admin\AdminRequest;
use App\Http\Requests\Admin\AdminUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

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
    public function createStore(AdminRequest $request){

        try{

            AdminUser::create(array_merge($request->except(['_token','password']),['password'=>bcrypt($request->get('password'))]));

            return app('common')->jump('添加成功！','user');

        }catch (\Exception $e){

            return app('common')->jump('添加失败！');

        }

    }

    // 编辑用户
    public function edit(AdminUser $id) {

        return view('admin.user.edit',compact('id'));

    }

    // 编辑用户--存储行为
    public function editStore(AdminUserRequest $request){

        try{

            $admin_user = AdminUser::find($request->get('id','0'));

            // 判断原密码和输入密码是否匹配
            if (!Hash::check($request->get('password_raw'),$admin_user->password)){

                return app('common')->jump('原密码不对！');

            }else{

                $admin_user->email = $request->get('email');
                $admin_user->password = bcrypt($request->get('password'));
                $admin_user->save();

                return app('common')->jump('更新成功！','user');

            }

        }catch (\Exception $e){

            return app('common')->jump('更新失败！');

        }

    }

    // 删除用户
    public function delete($id) {

        try{

            // 判断admin用户无法删除
            if ($id=="1"){
                return app('common')->jump('此记录无法删除！','user');
            }else{
                // 1.删除角色用户表关联的数据
                $roleUser = \DB::table('admin_role_users')->where('user_id',$id)->get()->map(function ($value) { return (array)$value; })->toArray();
                foreach ($roleUser as $roleUsers){
                    \DB::table('admin_role_users')->where(['id'=>$roleUsers['id'],'user_id'=>$id])->delete();
                }
                // 2.删除用户数据
                AdminUser::destroy($id);
                return app('common')->jump('删除成功！','user');
            }

        }catch (\Exception $e){

            return app('common')->jump('删除失败！');

        }

    }

    // 用户角色页面
    public function role(AdminUser $user){

        $roles = AdminRole::all();

        $myRoles = $user->roles;

        return view('admin.user.role',compact('roles','myRoles','user'));

    }

    // 存储用户角色
    public function storeRole(AdminUser $user){

        try{

            $this->validate(\request(),[
                'roles'=> 'required|array'
            ],[
                'roles.required' => '角色必填',
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

            return app('common')->jump('分配成功！','user');

        }catch (\Exception $e){

            return app('common')->jump('分配失败！');

        }

    }

}
