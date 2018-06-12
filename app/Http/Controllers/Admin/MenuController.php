<?php

namespace App\Http\Controllers\Admin;

use App\AdminPermission;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    // 菜单列表
    public function index(Menu $menu){

        $menus = $menu->wherePid(0)->get();
        $res_menus = [];
        foreach ($menus as $menu){
           $for =  $menu->wherePid($menu->id)->get();
           foreach ($for as $list){
               $res_menus[]=$list;
           }
        }

        return view('admin.menu.index',compact('menus','res_menus'));
    }

    // 创建菜单
    public function create(Menu $menu){

        $menus = $menu->wherePid(0)->get();
        $permissions = AdminPermission::all();
        return view('admin.menu.create',compact('menus','permissions'));

    }

    // 创建菜单--储存行为
    public function createStore(Request $request){

        $this->validate($request,[
            'name'=>'required',
        ],[
            'name.required' => '名称必填',
        ]);

        Menu::create($request->all());

        return app('common')->jump('添加成功！','menu');

    }

    // 编辑菜单
    public function edit(Menu $id){

        $menus = Menu::wherePid(0)->get();
        $permissions = AdminPermission::all();
        return view('admin.menu.edit',compact('menus','permissions','id'));

    }

    // 编辑菜单--存储行为
    public function editStore(Request $request){

        $this->validate($request,[
            'name'=>'required',
        ],[
            'name.required' => '名称必填',
        ]);

        Menu::whereId($request->get('id'))->update($request->except(['_token']));
        return app('common')->jump('更新成功！','menu');

    }

    // 删除菜单
    public function delete($id){

        $url = app('common')->jump('此记录无法删除！','menu');

        switch ($id)
        {
            case 1:
                return $url;
                break;
            case 2:
                return $url;
                break;
            case 3:
                return $url;
                break;
            case 4:
                return $url;
                break;
            case 5:
                return $url;
                break;
            case 6:
                return $url;
                break;
            case 7:
                return $url;
                break;
            default:
                Menu::destroy($id);
                return app('common')->jump('删除成功！','menu');
        }

    }

}
