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
                                <h3 class="panel-title">编辑角色</h3>
                            </div>
                            <div class="panel-body">

                                <form role="form" action="{{ route('role.edit.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">角色名：</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $id->name }}" placeholder="请输入角色名称">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">描 述：</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ $id->description }}" placeholder="请输入描述">
                                    </div>
                                    <input type="hidden" name="id" value="{{ $id->id }}">
                                    <button type="submit" class="btn btn-primary">确定</button>
                                    <button type="button" class="btn btn-warning" onclick="goPath('{{ route('role') }}')">返回</button>
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