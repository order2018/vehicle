<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 配置基本默认数据
        $basic = [
            [
                //----------------------系统区-----------------------
                // 基本配置
                'app_name'=>'Laravel',
                'app_debug'=>'true',
                'app_url'=>'http://localhost',

                // 数据库配置
                'db_connection'=>'mysql',
                'db_host'=>'127.0.0.1',
                'db_port'=>'3306',
                'db_database'=>'demo_db',
                'db_username'=>'root',

                // 缓存配置
                'cache_driver'=>'file',
                'session_driver'=>'file',

                // 自定义配置
                'home_name'=>'演示系统',
                'admin_name'=>'演示后台管理系统',
                'home_url'=>'http://www.demo.com',
                'admin_url'=>'http://admin.demo.com',

                //----------------------基本区-----------------------
                'basic_author'=>'陈小龙',

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        \Illuminate\Support\Facades\DB::table('basics')->insert($basic);
    }
}
