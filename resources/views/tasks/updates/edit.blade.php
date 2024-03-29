@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$task->title}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Задачи</a></li>
                            <li class="breadcrumb-item active">{{$task->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
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
                        <form action="{{ route('tasks.updates.update', [$task->id, $update->id] )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for='name'>Пояснение</label>
                                    <input type="text" id='name' name='title' class="form-control"
                                           placeholder="пояснение" value="{{$update->title}}">
                                    @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Статус</label>
                                    <input type="text" id='name' name='status' class="form-control"
                                           placeholder="Введите срок" value="{{$update->status}}">
                                    @error('status')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for='name'>Текст</label>--}}
{{--                                    <textarea type="text" id='name' name='text' class="form-control"--}}
{{--                                              placeholder="Введите текст">{{$update->text}}</textarea>--}}
{{--                                    @error('text')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

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
