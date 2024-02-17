@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Новая отправка</h1>
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
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="col-lg-8 card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Форма</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('marketings.emails.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for='name'>Название организации</label>
                                    <input type="text" id='name' name='title' class="form-control"
                                           placeholder="Введите название организации" value="{{old('title')}}">
                                    @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Почтовый адрес</label>
                                    <input type="text" id='name' name='email' class="form-control"
                                           placeholder="Введите название организации" value="{{old('email')}}">
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Статус</label>
                                    <select type="text" id='name' name='status' class="form-control">
                                        <option>Отправили презентацию</option>
                                        <option>Получили ответ на письмо</option>
                                        <option>Получили тендер или площадку</option>
                                    </select>
                                    @error('status')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
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
