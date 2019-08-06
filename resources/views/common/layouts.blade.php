<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>轻松学会Laravel @yield('title')</title>
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
    @section('style')
    @show
</head>
<body>

<!--    头部-->
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h2>轻松学会Laravel</h2>

            <p> - 玩转Laravel表单</p>
        </div>
    </div>
@show

<!--中间内容区局-->
<div class="container">
    <div class="row">

        <!--        左侧菜单区域-->
        <div class="col-md-3">
            @section('leftmenu')
                <div class="List-group">
                    <a href="{{url('student/index')}}" class="list-group-item
{{Request::getPathInfo()!=='/student/create' ? 'active':''}}
                            ">学生列表</a>
                    <a href="{{url('student/create')}}" class="list-group-item
{{Request::getPathInfo()=='/student/create' ? 'active':''}}
                            ">新增学生</a>
                </div>
            @show
        </div>

        <!--        右侧内容区域-->
        <div class="col-md-9">

            @yield('content')


        </div>
    </div>
</div>

<!--尾部-->
@section('footer')
    <div class="jumbotron" style="margin: 0;">
        <div class="container">
            <span> ~~~dsy~~~</span>
        </div>
    </div>
@show

<!--jQuery 文件-->
<script src="{{asset('static/jquery/jquery.min.js')}}"></script>
<!--Bootstrap JavaScript 文件-->
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

@section('javascript')
@show
</body>
</html>