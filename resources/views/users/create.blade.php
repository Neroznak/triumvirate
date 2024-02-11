@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Новый сотрудник</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for='name'>Фамилия</label>
                                    <input type="text" id='name' name='surname' class="form-control"
                                           placeholder="Введите фамилию" value="{{old('surname')}}">
                                    @error('surname')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Имя</label>
                                    <input type="text" id='name' name='name' class="form-control"
                                           placeholder="Введите имя" value="{{old('name')}}">
                                    @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Email</label>
                                    <input type="text" id='name' name='email' class="form-control"
                                           placeholder="Введите email" value="{{old('email')}}">
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Пароль</label>
                                    <input type="text" id='name' name='password' class="form-control"
                                           placeholder="Введите пароль" value="{{old('password')}}">
                                    @error('password')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Телефон</label>
                                    <input type="text" id='name' name='phone' class="form-control"
                                           placeholder="Введите телефон" value="{{old('phone')}}">
                                    @error('phone')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Дата рождения</label>
                                    <input type="text" id='name' name='birthday' class="form-control"
                                           placeholder="Введите дату рождения" value="{{old('birthday')}}">
                                    @error('birthday')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Отдел</label>
                                    <input type="text" id='name' name='department_id' class="form-control"
                                           placeholder="Введите название отдела" value="{{old('department_id')}}">
                                    @error('department_id')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Должность</label>
                                    <input type="text" id='name' name='position' class="form-control"
                                           placeholder="Введите название должности" value="{{old('position')}}">
                                    @error('position')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Зарплата</label>
                                    <input type="text" id='name' name='salary' class="form-control"
                                           placeholder="Введите зарплату" value="{{old('salary')}}">
                                    @error('salary')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Образование</label>
                                    <input type="text" id='name' name='education' class="form-control"
                                           placeholder="Введите образование" value="{{old('education')}}">
                                    @error('education')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Описание сотрудника</label>
                                    <textarea type="text" id='name' name='comment' class="form-control"
                                              placeholder="текст">{{old('comment')}}</textarea>
                                    @error('comment')
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
