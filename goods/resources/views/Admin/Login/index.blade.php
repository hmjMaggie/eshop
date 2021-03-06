
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8">
        <title>后台登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="/Admin/assets1/css/reset.css">
        <link rel="stylesheet" href="/Admin/assets1/css/supersized.css">
        <link rel="stylesheet" href="/Admin/assets1/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>后台登录</h1>
            <form action="{{url('/Admin/Login/login')}}" method="post">
                {{csrf_field()}}
                <input type="text" name="username" class="username" placeholder="用户名">
                <input type="password" name="password" class="password" placeholder="密码">
                <button type="submit">登录</button>
                <div class="error"><span>+</span></div>
            </form>
            <div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div>
        </div>
        <div align="center">Collect from <a href="##" target="_blank" title=""></a></div>

        <!-- Javascript -->
        <script src="/Admin/assets1/js/jquery-1.8.2.min.js"></script>
        <script src="/Admin/assets1/js/supersized.3.2.7.min.js"></script>
        <script src="/Admin/assets1/js/supersized-init.js"></script>
        <script src="/Admin/assets1/js/scripts.js"></script>

    </body>

</html>

