@extends('layouts.admin')

@section('content')
    <!-- WRAPPER -->
    <div id="wrapper">
    @include('include.admin._header')
    @include('include.admin._sidebar')
    <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BASIC TABLE -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">菜单列表</h3>
                                </div>
                                <div class="panel-body">
                                    <p class="demo-button">
                                        <button type="button" class="btn btn-success" onclick="goPath('{{ route('menu.create') }}')">添加菜单</button>
                                    </p>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>名称</th>
                                            <th>权限</th>
                                            <th>子栏目</th>
                                            <th>URL</th>
                                            <th>ICON</th>
                                            <th>排序</th>
                                            <th>时间</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($menus as $menu)
                                        <tr>
                                            <td>{{ $menu->id }}</td>
                                            <td>{{ $menu->name }}</td>
                                            <td>{{ $menu->can }}</td>
                                            <td><button type="button" class="btn btn-default btn-xs" onclick="goPath('{{ route('menu.create') }}?id={{ $menu->id }}')">添加</button></td>
                                            <td></td>
                                            <td>{{ $menu->icon }}</td>
                                            <td>0</td>
                                            <td>{{ $menu->created_at }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-xs" onclick="goPath('{{ route('menu.edit',$menu->id) }}')">编辑</button>
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal-{{ $menu->id }}">删除</button>
                                                @include('include.admin._del_modal',['mid'=>$menu->id,'title'=>$menu->name,'url'=>route('menu.delete',['id'=>$menu->id])])
                                            </td>
                                        </tr>
                                            @foreach($res_menus as $res_menu)
                                                @if($menu->id == $res_menu->pid)
                                                <tr>
                                                    <td>{{ $res_menu->id }}</td>
                                                    <td>　L {{ $res_menu->name }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{ $res_menu->route }}</td>
                                                    <td>{{ $res_menu->icon }}</td>
                                                    <td>0</td>
                                                    <td>{{ $res_menu->created_at }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-xs" onclick="goPath('{{ route('menu.edit',$res_menu->id) }}?id={{ $res_menu->id }}')">编辑</button>
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal-{{ $res_menu->id }}">删除</button>
                                                        @include('include.admin._del_modal',['mid'=>$res_menu->id,'title'=>$res_menu->name,'url'=>route('menu.delete',['id'=>$res_menu->id])])
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END BASIC TABLE -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        @include('include.admin._footer')
    </div>
    <!-- END WRAPPER -->

@endsection