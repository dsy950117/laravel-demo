@extends('common.layouts')

@section('content')

    @include('common.message')
    <!--            自定义内容区域-->
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>添加时间</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $key)
                <tr>
                    <th scope="row">{{$key->id}}</th>
                    <td>{{$key->name}}</td>
                    <td>{{$key->age}}</td>
                    <td>{{$key->sex($key->sex)}}</td>
                    <td>{{date('Y-m-d',$key->created_at)}}</td>
                    <td>
                        <a href="{{url('student/detail',['id'=>$key->id])}}">详情</a>
                        <a href="{{url('student/update',['id'=>$key->id])}}">修改</a>
                        <a href="{{url('student/delete',['id'=>$key->id])}}"
                        onclick="if(confirm('确定要删除吗')==false) return false;">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!--            分页-->
    <div>
        <div class="pull-right">
            {{$students->render()}}
        </div>

    </div>
@stop

