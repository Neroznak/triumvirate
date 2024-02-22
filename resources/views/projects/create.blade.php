@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Новый проект</h1>
                    </div><!-- /.col -->
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
{{--                        </ol>--}}
{{--                    </div><!-- /.col -->--}}
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
                        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for='name'>Название проекта</label>
                                    <input type="text" id='name' name='title' class="form-control"
                                           placeholder="Введите название проекта" value="{{old('title')}}">
                                    @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Адрес объекта</label>
                                    <input type="text" id='name' name='address' class="form-control"
                                           placeholder="Введите адрес объекта" value="{{old('address')}}">
                                    @error('address')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Заказчик</label>
                                    <select type="text" id='name' name='customer' class="form-control">
                                        @foreach($companies as $company)
                                            <option>
{{--                                                {{ old('customer') == $company->id ? 'selected' : '' }}--}}
                                                {{$company->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('customer')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="dob">Cрок реализации</label>
                                    <input type="date" id="dob" name="deadline" class="form-control" value="{{old('deadline')}}">
                                    @error('deadline')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Договор</label>
                                    <input type="text" id='name' name='contract' class="form-control"
                                           placeholder="Введите номер и дату договора" value="{{old('contract')}}">
                                    @error('contract')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Ответственный</label>
                                    <input type="text" id='name' name='response' class="form-control"
                                           placeholder="Введите ответственного" value="{{old('response')}}">
                                    @error('response')
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
