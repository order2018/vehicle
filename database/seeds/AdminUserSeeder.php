<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 1 后台角色数据
        $role = [
            [
                'name'=>'sys-manager',
                'description'=>'超级管理员',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        \Illuminate\Support\Facades\DB::table('admin_roles')->insert($role);

        // 2 后台权限数据
        $permission = [
            [
                'name'=>'system',
                'description'=>'系统设置',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'permission',
                'description'=>'权限管理',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        \Illuminate\Support\Facades\DB::table('admin_permissions')->insert($permission);

        // 3 角色分配权限数据
        $role_permission = [

            [
                'role_id'=>'1',
                'permission_id'=>'1',
            ],
            [
                'role_id'=>'1',
                'permission_id'=>'2',
            ],

        ];

        \Illuminate\Support\Facades\DB::table('admin_permission_roles')->insert($role_permission);

        // 4 后台用户数据

        $user = [
            'name' => 'admin',
            'email' => 'admin@qq.com',
            'password'  => bcrypt('123456'),
        ];

        \App\AdminUser::create($user);

        // 5 用户分配角色数据

        $user_role = [
            [
                'role_id'=>'1',
                'user_id'=>'1'
            ],
        ];

        \Illuminate\Support\Facades\DB::table('admin_role_users')->insert($user_role);

    }
}
