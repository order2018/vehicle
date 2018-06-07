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
                                <h3 class="panel-title">角色权限列表</h3>
                            </div>
                            <div class="panel-body">

                                <form role="form" action="{{ url('/role/'.$role.'/permission') }}" method="post">

                                    {{ csrf_field() }}

                                    @foreach($permissions as $permission)
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="permissions[]" @if($myPermissions->contains($permission)) checked @endif value="{{ $permission->id }}" >
                                            <span>{{ $permission->name }}</span>
                                        </label>
                                    @endforeach

                                    <br>

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

@endsection