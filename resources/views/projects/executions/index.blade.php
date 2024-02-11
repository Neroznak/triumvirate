@extends('layouts.main')
@section('content')
{{--    <div class="content-wrapper kanban">--}}
{{--        <section class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-9">--}}
{{--                        <div class="row">--}}
{{--                            <h1>{{$project->title}}</h1>--}}
{{--                            <a href="{{ route('projects.tasks.create', $project->id) }}" class="btn btn-primary ml-2">Добавить</a>--}}
{{--                            ПРОБЛЕМА - НЕ УДАЁТСЯ СОЗДАВАТЬ ЗАДАЧУ ИЗ ПРОЕКТА, ЧТОБЫ В НЕЙ БЫЛ ID ПРОЕКТА--}}
{{--                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary ml-2">Назад</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                        <div class="col-sm-9">
                            <div class="row">
                                <h1>{{$project->title}}</h1>
                                <a href="{{ route('projects.tasks.create', $project->id) }}" class="btn btn-success ml-2">Добавить</a>
                                {{--                            ПРОБЛЕМА - НЕ УДАЁТСЯ СОЗДАВАТЬ ЗАДАЧУ ИЗ ПРОЕКТА, ЧТОБЫ В НЕЙ БЫЛ ID ПРОЕКТА--}}
                                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary ml-2">Назад</a>
                            </div>
{{--                            <ol class="breadcrumb float-sm-right">--}}
{{--                                <li class="breadcrumb-item"><a href="#">Сотрудники</a></li>--}}
{{--                                <li class="breadcrumb-item active">Список сотрудников</li>--}}
{{--                            </ol>--}}
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3 col-8">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Название задачи</th>
                                        <th>Исполнитель</th>
                                        <th>Срок</th>
                                        <th>Смотреть</th>
                                    </thead>
                                    <tbody>
                                    @foreach($tasks as $task)
                                        @if ($task->project_id === $project->id)
                                        <tr onclick="{{route('tasks.show',$task->id)}}">
                                            <td>{{$task->title}}</td>
                                            <td>{{$users[$task->performer-1]->surname.' '.mb_substr($users[$task->performer-1]->name, 0, 1).'.'.mb_substr($users[$task->performer-1]->patronymic, 0, 1).'.'}}</td>
                                            <td>{{\Carbon\Carbon::parse($task->deadline)->format('d.m.Y')}}</td>
                                            <td><a href="{{route('tasks.show',$task->id)}}"> <i class="nav-icon far fas fa-eye"></i></a></td>
                                        </tr>

                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <!-- /.card -->
                </div>


                <!-- /.card -->

            </div>
            <!-- ./col -->

            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </section>




{{--        <section class="content pb-3">--}}
{{--            <div class="container-fluid col-10">--}}
{{--                <div class="card card-row card-danger">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">--}}
{{--                            Ход выполнения--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        @foreach($tasks as $task)--}}
{{--                            @if($task->project_id === $project->id)--}}
{{--                                <div class="card card-danger card-outline">--}}
{{--                                    <a href="{{route('tasks.show',$task->id)}}">--}}
{{--                                        <font color="black">--}}
{{--                                            <div class="card-header">--}}
{{--                                                <h5 class="card-title">{{$task->title}}</h5>--}}
{{--                                            </div>--}}
{{--                                        </font>--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </section>--}}
    </div>
@endsection
