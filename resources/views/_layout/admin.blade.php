<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>@yield('title')</title>

    <link href="/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">
    @yield('css')

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css?v=2.2.0" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        @include('_layout.offcanvas')
        @yield('wrapper')
        </div>
    </div>
    <div style='padding-top: 2px; background-color: #333; color:#ddd;'>
        <strong>Copyright</strong> Culture and Communication School Research Center &copy; 2015 &nbsp;&nbsp; Theme By：<a href="http://www.zi-han.net" target="_blank">zihan's blog</a>
    </div>
    @yield('js')
</body>

</html>