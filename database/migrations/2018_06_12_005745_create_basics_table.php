<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->increments('id');

            //----------------------系统区----------------------------
            // 基本配置
            $table->string('app_name',128);
            $table->string('app_debug',32);
            $table->string('app_url',128);

            // 数据库配置
            $table->string('db_connection',32);
            $table->string('db_host',45);
            $table->string('db_port',32);
            $table->string('db_database',32);
            $table->string('db_username',32);
            $table->string('db_prefix',32)->nullable();
            $table->string('db_password',45)->nullable();

            // 缓存配置
            $table->string('cache_driver',32);
            $table->string('session_driver',32);

            // 自定义域名
            $table->string('home_name',128)->nullable();
            $table->string('admin_name',128)->nullable();
            $table->string('home_url',128)->nullable();
            $table->string('admin_url',128)->nullable();

            //----------------------基本区----------------------------
            // 其它自定义
            $table->string('basic_name',128)->nullable();
            $table->string('basic_tel',128)->nullable();
            $table->string('basic_phone',128)->nullable();
            $table->string('basic_add',128)->nullable();
            $table->string('basic_number',128)->nullable();
            $table->string('basic_picture')->nullable();
            $table->string('basic_title',128)->nullable();
            $table->string('basic_keyword')->nullable();
            $table->text('basic_description')->nullable();
            $table->string('basic_author',32)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basics');
    }
}
