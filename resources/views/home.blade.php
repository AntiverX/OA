@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">个人信息</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                        <div class="col-md-8">学号：{{$id}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">姓名：{{$name}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">状态：{{$state}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">年级：{{$grade}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-8">支部：{{$belong}}</div>
                        </div>                   
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">时长查询</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                        <div class="col-md-8">学号：{{$id}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">姓名：{{$name}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">状态：{{$state}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">年级：{{$grade}}</div>
                        </div>
                        <div class="row">
                        <div class="col-md-8">支部：{{$belong}}</div>
                        </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
