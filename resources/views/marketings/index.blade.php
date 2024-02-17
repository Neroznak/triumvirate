@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Маркетинг</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
{{--                        </ol>--}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-3 col-6">
                    <a href="{{route('marketings.emails.index')}}">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$emails->count()}}</h3>
                                <p>Почтовая рассылка</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </a>
{{--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                </div>

                <div class="col-lg-3 col-6">
                    <a href="#">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>4</h3>
                                <p>Тендерные площадки</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>

                            </div>
                            <div class="small-box-footer">В разработке</div>
{{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                        </div>

                    </a>
                </div>

                <div class="col-lg-3 col-6">
                    <a href="#">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>6</h3>
                                <p>Сайт-лендинг</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <div class="small-box-footer">В разработке</div>

                        </div>
                    </a>
                    {{--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                </div>

                <div class="col-lg-3 col-6">
                    <a href="#">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>1</h3>
                                <p>Наружняя реклама</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <div class="small-box-footer">В разработке</div>

                        </div>
                    </a>
                    {{--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                </div>

                </div>
            </div>

        </section>

    </div>


@endsection
