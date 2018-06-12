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
                                <h3 class="panel-title">系统设置</h3>
                            </div>
                            <div class="panel-body">
                                <p class="demo-button">
                                    <button type="button" class="btn btn-success" onclick="goPath('{{ route('basic') }}')">基本设置</button>
                                    <button type="button" class="btn btn-warning" onclick="goPath('{{ route('system') }}')">系统设置</button>
                                </p>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="" method="post">
                                    {{ csrf_field() }}

                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="padding-top: 13px; padding-bottom: 13px;">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">基本配置区</a></h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse in">
                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <label for="home_name">系统前台名称：</label>
                                                        <input type="text" class="form-control" id="home_name" name="home_name" value="{{ $data['home_name'] }}" placeholder="请输入系统系统前台名称">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="home_url">系统前台URL：</label>
                                                        <input type="text" class="form-control" id="home_url" name="home_url" value="{{ $data['home_url'] }}" placeholder="请输入系统前台URL">
                                                    </div>

                                                    <br>
                                                    <div class="form-group">
                                                        <label for="admin_name">系统前后台称：</label>
                                                        <input type="text" class="form-control" id="admin_name" name="admin_name" value="{{ $data['admin_name'] }}" placeholder="请输入系统系统后台名称">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="admin_url">系统后台URL：</label>
                                                        <input type="text" class="form-control" id="admin_url" name="admin_url" value="{{ $data['admin_url'] }}" placeholder="请输入系统后台URL">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="padding-top: 13px; padding-bottom: 13px;">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">系统配置区</a></h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse">
                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <label for="app_name">框架系统：</label>
                                                        <input type="text" class="form-control" id="app_name" name="app_name" value="{{ $data['app_name'] }}" placeholder="请输入框架系统">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="app_debug">开启DEBUG：</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="app_debug" id="app_debug" value="true" @if($data['app_debug'] == "true") checked @endif> 是
                                                            </label>　
                                                            <label>
                                                                <input type="radio" name="app_debug" id="app_debug" value="false" @if($data['app_debug'] == "false") checked @endif> 否
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="app_url">系统URL：</label>
                                                        <input type="text" class="form-control" id="app_url" name="app_url" value="{{ $data['app_url'] }}" placeholder="请输入系统URL">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="padding-top: 13px; padding-bottom: 13px;">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"href="#collapseTwo">数据库配置区</a></h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label for="db_connection">数据库：</label>
                                                        <input type="text" class="form-control" id="db_connection" name="db_connection" value="{{ $data['db_connection'] }}" placeholder="请输入数据库">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="db_host">数据库地址：</label>
                                                        <input type="text" class="form-control" id="db_host" name="db_host" value="{{ $data['db_host'] }}" placeholder="请输入数据地址">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="db_port">数据端口号：</label>
                                                        <input type="text" class="form-control" id="db_port" name="db_port" value="{{ $data['db_port'] }}" placeholder="请输入数据端口号">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="db_database">数据库名称：</label>
                                                        <input type="text" class="form-control" id="db_database" name="db_database" value="{{ $data['db_database'] }}" placeholder="请输入数据库名称">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="db_username">数据库账号：</label>
                                                        <input type="text" class="form-control" id="db_username" name="db_username" value="{{ $data['db_username'] }}" placeholder="请输入数据库账号">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="db_prefix">数据库前缀：</label>
                                                        <input type="text" class="form-control" id="db_prefix" name="db_prefix" value="{{ $data['db_prefix'] }}" placeholder="请输入数据库前缀">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="db_password">数据库密码：</label>
                                                        <input type="text" class="form-control" id="db_password" name="db_password" value="{{ $data['db_password'] }}" placeholder="请输入数据库密码">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="padding-top: 13px; padding-bottom: 13px;">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">缓存配置区</a></h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <label for="cache_driver">缓存配置：</label>
                                                        <input type="text" class="form-control" id="cache_driver" name="cache_driver" value="{{ $data['cache_driver'] }}" placeholder="请输入缓存配置">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="session_driver">SESSION配置：</label>
                                                        <input type="text" class="form-control" id="session_driver" name="session_driver" value="{{ $data['session_driver'] }}" placeholder="请输入SESSION配置">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <br>
                                    <input type="hidden" name="id" value="{{ $data['id'] }}">
                                    <button type="submit" class="btn btn-primary">确定</button>
                                    <button type="button" class="btn btn-warning" onclick="goPath('{{ route('system') }}')">返回</button>
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