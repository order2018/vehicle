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
                                    <h3 class="panel-title">角色列表</h3>
                                </div>
                                <div class="panel-body">
                                    <p class="demo-button">
                                        <button type="button" class="btn btn-success" onclick="goPath('{{ route('role.create') }}')">添加角色</button>
                                    </p>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>名称</th>
                                            <th>描述</th>
                                            <th>时间</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->description }}</td>
                                            <td>{{ $role->created_at }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-xs" onclick="goPath('{{ route('role.edit',['id'=>$role->id]) }}')">编辑</button>
                                                <button type="button" class="btn btn-info btn-xs" onclick="goPath('{{ url('/role/'.$role->id.'/permission') }}')">权限分配</button>
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal-1">删除</button>
                                                @include('include.admin._del_modal',['mid'=>$role->id,'title'=>'admin','url'=>''])
                                            </td>
                                        </tr>
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