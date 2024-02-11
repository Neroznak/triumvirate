@extends('layouts.main')
@section('content')
    <div class="content-wrapper kanban">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <h1>Проекты</h1>
                            <a href="{{ route('projects.create') }}" class="btn btn-success ml-2">Добавить</a>
                            <a href="{{ route('projects.archieve') }}" class="btn btn-secondary ml-2">Архив</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content pb-3">
            <div class="container-fluid h-100">
                <div class="card card-row card-danger">
                    <div class="card-header">
                        <h3 class="card-title">
                            Тендеры
                        </h3>
                    </div>
                    <div class="card-body">
                        @foreach($projects as $project)
                            @if($project->status === 'Сделать КП')
                                <div class="card card-danger card-outline">
                                    <a href="{{route('projects.show',$project->id)}}">
                                        <font color="black">
                                            <div class="card-header">
                                                <h5 class="card-title">{{$project->title}}</h5>
                                                <br>
                                                <div style="display: none">
                                                    @foreach($tasks as $task)
                                                        @if($task->project_id === $project->id)
                                                            {{$answer = $task->title}}
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <span
                                                    style="font-size:12px; line-height: 0.5;  color:gray">{{$answer}}</span>
                                                <div style="display: none">
                                                    {{$answer='Нет задач'}}
                                                </div>
                                                <br>

                                            </div>
                                        </font>
                                    </a>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>













                <div class="card card-row card-warning">
                    <div class="card-header">
                        <h3 class="card-title">
                            В работе
                        </h3>
                    </div>
                    <div class="card-body">
                        @foreach($projects as $project)
                            @if($project->status === 'В работе')
                                <div class="card card-warning card-outline">
                                    <a href="{{route('projects.show',$project->id)}}">
                                        <font color="black">
                                            <div class="card-header">
                                                <h5 class="card-title">{{$project->title}}</h5>
                                                <br>
                                                <div style="display: none">
                                                    @foreach($tasks as $task)
                                                        @if($task->project_id === $project->id)
                                                            {{$answer = $task->title}}
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <span
                                                    style="font-size:12px; line-height: 0.5;  color:gray">{{$answer}}</span>
                                                <div style="display: none">
                                                    {{$answer='Нет задач'}}
                                                </div>
                                                <br>

                                            </div>
                                        </font>
                                    </a>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="card card-row card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            На подписании
                        </h3>
                    </div>
                    <div class="card-body">
                        @foreach($projects as $project)
                            @if($project->status === 'На подписании')
                                <div class="card card-info card-outline">
                                    <a href="{{route('projects.show',$project->id)}}">
                                        <font color="black">
                                            <div class="card-header">
                                                <h5 class="card-title">{{$project->title}}</h5>
                                                <br>
                                                <div style="display: none">
                                                    @foreach($tasks as $task)
                                                        @if($task->project_id === $project->id)
                                                            {{$answer = $task->title}}
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <span
                                                    style="font-size:12px; line-height: 0.5;  color:gray">{{$answer}}</span>
                                                <div style="display: none">
                                                    {{$answer='Нет задач'}}
                                                </div>
                                                <br>

                                            </div>
                                        </font>
                                    </a>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="card card-row card-success">
                    <div class="card-header">
                        <h3 class="card-title">
                            Ожидают оплаты
                        </h3>
                    </div>
                    <div class="card-body">
                        @foreach($projects as $project)
                            @if($project->status === 'Ожидает оплаты')
                                <div class="card card-success card-outline">
                                    <a href="{{route('projects.show',$project->id)}}">
                                        <font color="black">
                                            <div class="card-header">
                                                <h5 class="card-title">{{$project->title}}</h5>
                                                <br>
                                                <div style="display: none">
                                                    @foreach($tasks as $task)
                                                        @if($task->project_id === $project->id)
                                                            {{$answer = $task->title}}
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <span
                                                    style="font-size:12px; line-height: 0.5;  color:gray">{{$answer}}</span>
                                                <div style="display: none">
                                                    {{$answer='Нет задач'}}
                                                </div>
                                                <br>

                                            </div>
                                        </font>
                                    </a>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>






            </div>
        </section>
    </div>
@endsection
