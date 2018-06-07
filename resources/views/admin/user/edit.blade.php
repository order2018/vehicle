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
                                <input type="text" class="form-control" placeholder="text field">
                                <br>
                                <input type="password" class="form-control" value="asecret">
                                <br>
                                <textarea class="form-control" placeholder="textarea" rows="4"></textarea>
                                <br>
                                <select class="form-control">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                                <br>
                                <label class="fancy-checkbox">
                                    <input type="checkbox">
                                    <span>Fancy Checkbox 1</span>
                                </label>
                                <label class="fancy-checkbox">
                                    <input type="checkbox">
                                    <span>Fancy Checkbox 2</span>
                                </label>
                                <label class="fancy-checkbox">
                                    <input type="checkbox">
                                    <span>Fancy Checkbox 3</span>
                                </label>
                                <br>
                                <label class="fancy-radio">
                                    <input name="gender" value="male" type="radio">
                                    <span><i></i>Male</span>
                                </label>
                                <label class="fancy-radio">
                                    <input name="gender" value="female" type="radio">
                                    <span><i></i>Female</span>
                                </label>
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