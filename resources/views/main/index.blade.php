@extends('layouts.main')
@section('content')
    <div class="content-wrapper kanban">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <h1>Главная</h1>
                        </div>
                    </div>
                </div>
            </div>


            {{--        <section class="content">--}}
            <div class="container-fluid tp-3">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <a href="{{route('projects.index')}}">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$projects->count()}}</h3>
                                    <p>Проектов</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </a>

                        {{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                    </div>



                <div class="col-lg-3 col-6">
                    <a href="{{route('users.index')}}">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$users->count()}}</h3>
                            <p>Специалистов</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        {{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                    </div>
                    </a>
                </div>


                <div class="col-lg-3 col-6">
                    <a href="{{route('machines.index')}}">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$machines->count()}}</h3>

                            <p>Единиц техники</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon far fas fa-car"></i>
                        </div>

                    </div>
                    </a>
                </div>


                <div class="col-lg-3 col-6">
                    <a href="{{route('tasks.index')}}">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$tasks->count()}}</h3>


                            <p>Актуальных задач</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        {{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                    </div>
                    </a>
                </div>


            </div>
    </div>
    </section>
    </div>
@endsection
