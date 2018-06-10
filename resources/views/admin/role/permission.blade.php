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
                                <h3 class="panel-title">权限分配　<small>为 <font color="red">{{ $role->description }}</font> 分配以下权限</small> </h3>
                            </div>
                            <div class="panel-body">

                                <form role="form" action="{{ url('/role/'.$role->id.'/permission') }}" method="post">

                                    {{ csrf_field() }}

                                    @foreach($permissions as $permission)
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="permissions[]" @if($myPermissions->contains($permission)) checked @endif value="{{ $permission->id }}" >
                                            <span>{{ $permission->description }}</span>
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