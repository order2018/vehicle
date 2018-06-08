<?php

Route::group(['domain'=>env('ADMIN_URL'),'namespace'=>'Admin'], function () {

    // 登陆页面
    Route::get('/','LoginController@index');
    Route::get('/login',['as' => 'login', 'uses' => 'LoginController@index']);


    // 定义系统模块管理，权限路由控制----------------------------------------------------------------------------------
    Route::group(['middleware'=>'can:system'],function (){

        // 后台首页
        Route::get('/index',['as' => 'index', 'uses' => 'IndexController@index']);

    });

    // 定义权限模块管理，权限路由控制----------------------------------------------------------------------------------
    Route::group(['middleware'=>'can:permission'],function (){

        // --------后台用户列表---------
        // 用户首页
        Route::get('/user',['as' => 'user', 'uses' => 'UserController@index']);
        // 创建用户
        Route::get('/user/create',['as' => 'user.create', 'uses' => 'UserController@create']);
        Route::post('/user/create',['as' => 'user.store', 'uses' => 'UserController@createStore']);
        // 编辑用户
        Route::get('/user/edit/{id}',['as' => 'user.edit', 'uses' => 'UserController@edit']);
        Route::post('/user/edit',['as' => 'user.edit.store', 'uses' => 'UserController@editStore']);
        // 删除用户
        Route::get('/user/del/{id}',['as' => 'user.delete', 'uses' => 'UserController@delete']);

        // 某个用户的角色关联页面
        Route::get('/user/{user}/role',['as' => 'user.role', 'uses' => 'UserController@role']);
        Route::post('/user/{user}/role',['as' => 'user.store.role', 'uses' => 'UserController@storeRole']);

        // --------后台角色列表---------
        // 角色首页
        Route::get('/role',['as' => 'role', 'uses' => 'RoleController@index']);
        // 创建角色
        Route::get('/role/create',['as' => 'role.create', 'uses' => 'RoleController@create']);
        Route::post('/role/create',['as' => 'role.store', 'uses' => 'RoleController@createStore']);
        // 编辑角色
        Route::get('/role-edit/{id}',['as' => 'role.edit', 'uses' => 'RoleController@edit']);
        Route::post('/role-edit',['as' => 'role.edit.store', 'uses' => 'RoleController@editStore']);
        // 删除角色
        Route::get('/role-del/{id}',['as' => 'role.delete', 'uses' => 'RoleController@delete']);

        // 某个角色权限的关联页面
        Route::get('/role/{role}/permission',['as' => 'role.permission', 'uses' => 'RoleController@permission']);
        Route::post('/role/{role}/permission',['as' => 'role.store.permission', 'uses' => 'RoleController@storePermission']);

        // --------后台权限列表---------
        // 权限首页
        Route::get('/permission',['as' => 'permission', 'uses' => 'PermissionController@index']);
        // 创建权限
        Route::get('/permission/create',['as' => 'permission.create', 'uses' => 'PermissionController@create']);
        Route::post('/permission/create',['as' => 'permission.store', 'uses' => 'PermissionController@createStore']);
        // 编辑权限
        Route::get('/permission/edit/{id}',['as' => 'permission.edit', 'uses' => 'PermissionController@edit']);
        Route::post('/permission/edit',['as' => 'permission.edit.store', 'uses' => 'PermissionController@editStore']);
        // 删除权限
        Route::get('/permission/del/{id}',['as' => 'permission.delete', 'uses' => 'PermissionController@delete']);

    });

});
