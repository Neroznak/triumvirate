@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Новый платёж</h1>
                    </div><!-- /.col -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <div class="col-lg-8 card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Форма</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('projects.works.update', [$project->id, $work->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for='name'>Наименование платежа</label>
                                        <input type="text" id='name' name='title' class="form-control"
                                               placeholder="Введите наименование платежа" value="{{$work->title}}">
                                        @error('title')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for='name'>Ед.изм</label>
                                        <input type="text" id='name' name='measure' class="form-control"
                                               placeholder="Введите ед.изм" value="{{$work->measure}}">
                                        @error('measure')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for='name'>Кол-во</label>
                                        <input type="text" id='name' name='amount' class="form-control"
                                               placeholder="Введите кол-во" value="{{$work->amount}}">
                                        @error('amount')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for='name'>Цена за ед.</label>
                                        <input type="text" id='name' name='cost' class="form-control"
                                               placeholder="Введите ед.изм" value="{{$work->cost}}">
                                        @error('cost')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for='name'>Основание платежа</label>
                                        <input type="text" id='name' name='comment' class="form-control"
                                               placeholder="Введите ответственного" value="{{$work->comment}}">
                                        @error('comment')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                            </form>
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

        </div><!-- /.container-fluid -->


        <!-- /.content-wrapper -->
@endsection
