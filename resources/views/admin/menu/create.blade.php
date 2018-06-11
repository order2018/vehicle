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
                                <h3 class="panel-title">添加菜单</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{ route('menu.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">名称：</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="请输入名称">
                                    </div>
                                    @if(!empty($_GET['id']))
                                    <div class="form-group">
                                        <label>类别：</label>
                                        <select class="form-control" name="pid">
                                            @foreach($menus as $list)
                                            <option value="{{ $list->id }}">{{ $list->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="route">URL：</label>
                                        <input type="text" class="form-control" id="route" name="route" placeholder="请输入URL">
                                    </div>
                                   @else
                                    <div class="form-group">
                                        <label>权限：</label>
                                        <select class="form-control" name="can">
                                            @foreach($permissions as $permission)
                                                <option value="{{ $permission->name }}">{{ $permission->description }}--{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="icon">ICON：</label>
                                        <input type="text" class="form-control" id="icon" name="icon" placeholder="请输入ICON">
                                    </div>
                                    @endif

                                    <button type="submit" class="btn btn-primary">确定</button>
                                    <button type="button" class="btn btn-warning" onclick="goPath('{{ route('menu') }}')">返回</button>
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