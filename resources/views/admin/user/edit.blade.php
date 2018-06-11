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
                        <!-- INPUTS -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">编辑用户</h3>
                            </div>
                            <div class="panel-body">

                                <form role="form" action="{{ route('user.edit.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">用户名：</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $id->name }}" placeholder="请输入用户名称" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">邮 箱：</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $id->email }}" placeholder="请输入用户邮箱">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_raw">原密码：</label>
                                        <input type="password" class="form-control" id="password_raw" name="password_raw" placeholder="请输入用户原密码">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">新密码：</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="请输入用户新密码">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">再次输入密码：</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="请输入用户密码">
                                    </div>
                                    <input type="hidden" name="id" value="{{ $id->id }}">
                                    <button type="submit" class="btn btn-primary">确定</button>
                                    <button type="button" class="btn btn-warning" onclick="goPath('{{ route('user') }}')">返回</button>
                                </form>

                            </div>
                        </div>
                        <!-- END INPUTS -->
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
    @include('include.admin._error_flashy')
@endsection