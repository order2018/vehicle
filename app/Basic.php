<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    protected $fillable = [

        // 系统区
        'app_name',
        'app_debug',
        'app_url',

        'db_connection',
        'db_host',
        'db_port',
        'db_database',
        'db_username',
        'db_prefix',
        'db_password',

        'cache_driver',
        'session_driver',

        'home_name',
        'admin_name',
        'home_url',
        'admin_url',

        // 基本信息区
        'basic_name',
        'basic_tel',
        'basic_phone',
        'basic_add',
        'basic_number',
        'basic_picture',
        'basic_title',
        'basic_keyword',
        'basic_description',
        'basic_author',
    ];
}
