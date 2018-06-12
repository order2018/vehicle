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
                                <h3 class="panel-title">基本设置</h3>
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
                                    <div class="form-group">
                                        <label for="name">系统名称：</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="请输入系统名称">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">系统描述：</label>
                                        <textarea class="form-control" placeholder="请输入系统描述" rows="5"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary">确定</button>
                                    <button type="button" class="btn btn-warning" onclick="goPath('{{ route('basic') }}')">返回</button>
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