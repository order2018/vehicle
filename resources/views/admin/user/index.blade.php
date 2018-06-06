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
                                    <h3 class="panel-title">用户列表</h3>
                                </div>
                                <div class="panel-body">
                                    <p class="demo-button">
                                        <button type="button" class="btn btn-success">添加用户</button>
                                    </p>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>名称</th>
                                            <th>排序</th>
                                            <th>时间</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>admin</td>
                                            <td>0</td>
                                            <td>2017-06-06 08:06:08</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-xs">编辑</button>
                                                <button type="button" class="btn btn-danger btn-xs">删除</button>
                                            </td>
                                        </tr>
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