<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">

    <style type="text/css">
        .flashy {
            font-family: "Source Sans Pro", Arial, sans-serif;
            padding: 11px 30px;
            border-radius: 4px;
            font-weight: 400;
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 16px;
            color: #fff;
            z-index: 9999;
        }
        .am-dimmer {
            z-index: 0;
        }
        .am-modal-dialog {
            width: 360px;
        }
    </style>

</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center"><img src="{{ asset('assets/img/logo-dark.png') }}" alt="Klorofil Logo"></div>
                            <p class="lead">Login to your account</p>
                        </div>

                        <form class="form-auth-small" action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">邮箱</label>
                                <input type="email" class="form-control" id="signin-email" name="email" placeholder="Email" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">密码</label>
                                <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox" value="1" name="is_remember">
                                    <span>记住我</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">登陆</button>
                            <div class="bottom">
                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">Free Bootstrap dashboard template</h1>
                        <p>by The Develovers</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>

<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
@include('flashy::message')
@include('include.admin._error_flashy')
</html>