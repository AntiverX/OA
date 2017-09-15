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
                <div class="panel-heading">实践时长</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>日期</th>
                        <th>活动名称</th>
                        <th>负责老师</th>
                        <th>实践时长</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($activity as $act) : ?>
                            <tr>
                                <td> <?= $act->date ?></td>
                                <td> <?= $act->name ?></td>
                                <td> <?= $act->teacher ?></td>
                                <td> <?= $act->hours ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                  </table>

                    <!-- <div class="row">
                        <div class="col-md-2">日期</div>
                        <div class="col-md-6">活动名称</div>
                        <div class="col-md-2">负责老师</div>
                        <div class="col-md-2">实践时长</div>
                    </div>
                    <?php foreach ($activity as $act) : ?>
                    <div class="row">
                        <div class="col-md-2"> <?= $act->date ?></div>
                        <div class="col-md-6"> <?= $act->name ?></div>
                        <div class="col-md-2"> <?= $act->teacher ?></div>
                        <div class="col-md-2"> <?= $act->hours ?></div>
                        </div>
                    <?php endforeach ?>            
                </div> -->
            </div>
        </div>
    </div>
</div>

@endsection