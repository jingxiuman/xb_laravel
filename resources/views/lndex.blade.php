<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ThoughAdmin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{URL(asset("/"))}}adminLite/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL(asset("/"))}}adminLite/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL(asset("/"))}}adminLite/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .xb_login{
        background-image: url(img/index_bg.jpg);
        background-position: center;
        background-size: 100%;
      }

    </style>
  </head>
  <body class="hold-transition login-page xb_login">
    <div class="login-box">
      <div class="login-logo">
        <a href="/"><b>ThoughAdmin</b>登陆界面</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="/" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8 XB_remember">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox">记住我
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">登陆</button>
            </div><!-- /.col -->
          </div>
        </form>
        <a href="#">我忘记了密码</a><br>
        <a href="/register" class="text-center">注册新账号</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{URL(asset("/"))}}adminLite/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{URL(asset("/"))}}adminLite/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="{{URL(asset("/"))}}adminLite/plugins/iCheck/icheck.min.js"></script>
    <script src="{{URL(asset("/"))}}js/index.js"></script>
  </body>
</html>
