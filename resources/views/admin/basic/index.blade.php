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

                                <form role="form" action="{{ route('basic.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="basic_name">公司名称：</label>
                                        <input type="text" class="form-control" id="basic_name" name="basic_name" value="{{ $data->basic_name }}" placeholder="请输入公司名称" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_tel">电话：</label>
                                        <input type="text" class="form-control" id="basic_tel" name="basic_tel" value="{{ $data->basic_tel }}" placeholder="请输入电话" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_phone">手机：</label>
                                        <input type="text" class="form-control" id="basic_phone" name="basic_phone" value="{{ $data->basic_phone }}" placeholder="请输入手机" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_add">地址：</label>
                                        <input type="text" class="form-control" id="basic_add" name="basic_add" value="{{ $data->basic_add }}" placeholder="请输入地址" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_number">备案号：</label>
                                        <input type="text" class="form-control" id="basic_number" name="basic_number" value="{{ $data->basic_number }}" placeholder="请输入备案号" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_picture">标志LOGO：</label>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>
                                                    <input type="file" id="file" name="basic_picture" multiple onchange="imgPreview(this,'basic_picture')">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img id="basic_picture" src="{{ app('common')->Thumbnail($data['basic_picture']) }}" class="img-rounded" style="height: 160px"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_title">标题：</label>
                                        <input type="text" class="form-control" id="basic_title" name="basic_title" value="{{ $data->basic_title }}" placeholder="请输入标题" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_keyword">关键字：</label>
                                        <input type="text" class="form-control" id="basic_keyword" name="basic_keyword" value="{{ $data->basic_keyword }}" placeholder="请输入关键字" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_description">描述：</label>
                                        <textarea class="form-control" placeholder="请输入描述" rows="5" name="basic_description" required>{{ $data->basic_description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="basic_author">作者：</label>
                                        <input type="text" class="form-control" id="basic_author" name="basic_author" value="{{ $data->basic_author }}" placeholder="请输入作者" required>
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="{{ $data->id }}" required>
                                    <button type="submit" class="btn btn-primary">确定</button>
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
@include('include.admin._img-preview')
@endsection