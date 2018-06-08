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
                                <h3 class="panel-title">用户角色列表</h3>
                            </div>
                            <div class="panel-body">

                                <form role="form" action="{{ url('/user/'.$user->id.'/role') }}" method="post">

                                    {{ csrf_field() }}

                                    @foreach($roles as $role)
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="roles[]" @if($myRoles->contains($role)) checked @endif value="{{ $role->id }}" >
                                        <span>{{ $role->name }}</span>
                                    </label>
                                    @endforeach

                                    <br>

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

@endsection