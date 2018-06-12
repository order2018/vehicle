<?php

use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 创建menus 数据，一级栏目
        $menu = [
            [
                'name'=>'系统设置',
                'icon'=>'lnr-cog',
                'can'=>'system',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'权限管理',
                'icon'=>'lnr-list',
                'can'=>'permission',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        \Illuminate\Support\Facades\DB::table('menus')->insert($menu);

        // 创建menus 数据，二级栏目
        $menus = [
            [
                'name'=>'基本设置',
                'route'=>'/basic',
                'pid'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'菜单设置',
                'route'=>'/menu',
                'pid'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],


            [
                'name'=>'用户列表',
                'route'=>'/user',
                'pid'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'角色列表',
                'route'=>'/role',
                'pid'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'权限列表',
                'route'=>'/permission',
                'pid'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        \Illuminate\Support\Facades\DB::table('menus')->insert($menus);
    }
}
