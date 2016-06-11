<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>后台管理系统 | 登陆</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="http://fonts.useso.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('assets/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/login.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

<body class="login">
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 bs-reset">
            <div class="login-bg" style="background-image:url({{ asset('assets/img/bg1.jpg') }})">
                <img class="login-logo" src="{{ asset('assets/img/logo.png') }}" /> </div>
        </div>
        <div class="col-md-6 login-container bs-reset">
            <div class="login-content">
                <h1>后台管理系统</h1>
                <p> 登陆系统进行操作 </p>

                <form action="{{ url('/login') }}" class="login-form" method="POST">
                    {{ csrf_field() }}
                    @include('layouts.error')
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group form-md-line-input {{ $errors->has('username') ? ' has-error' : 'has-success' }}">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="用户名" name="username" value="{{ old('username') }}">
                                    <div class="form-control-focus"> </div>
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group form-md-line-input {{ $errors->has('password') ? ' has-error' : 'has-success' }}">
                                <div class="input-icon">
                                    <input type="password" class="form-control" placeholder="登陆密码" name="password">
                                    <div class="form-control-focus"> </div>
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="md-checkbox md-checkbox-inline has-success">
                                <input type="checkbox" id="remember_me" name="remember" value="1" class="md-check">
                                <label for="remember_me">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span> 记住登陆 </label>
                            </div>

                        </div>
                        <div class="col-sm-8 text-right">
                            <div class="forgot-password">
                                <a href="javascript:;" id="forget-password" class="forget-password">忘记密码?</a>
                            </div>
                            <button class="btn green" type="submit">登 陆</button>
                        </div>
                    </div>
                </form>
                <form class="forget-form" action="javascript:;" method="post">
                    <h3 class="font-green">忘记密码 ?</h3>
                    <p> 输入您的邮箱取回密码. </p>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                    <div class="form-actions">
                        <button type="button" id="back-btn" class="btn green btn-outline">返回</button>
                        <button type="submit" class="btn btn-success uppercase pull-right">提交</button>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-7 pull-right bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; 后台管理系统 2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--[if lt IE 9]>
<script src="{{ asset('assets/js/respond.min.js') }}"></script>
<script src="{{ asset('assets/js/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/login.min.js') }}" type="text/javascript"></script>
</body>
</html>