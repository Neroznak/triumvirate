@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$user->surname.' '.$user->name}}</h1>
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
                <div class="col-1">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Назад</a>
                </div>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3 col-8">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Позиция</th>
                                        <th>Значение</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>ФИО</td>
                                        <td>{{$user->surname.' '.$user->name.' '.$user->patronymic}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>{{$user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата рождения</td>
                                        <td>{{$user->birthday}}</td>
                                    </tr>
                                    <tr>
                                        <td>Должность</td>
                                        <td>{{$user->position}}</td>
                                    </tr>
                                    <tr>
                                        <td>Зарплата</td>
                                        <td>{{$user->salary}}</td>
                                    </tr>
                                    <tr>
                                        <td>Образование</td>
                                        <td>{{$user->education}}</td>
                                    </tr>


{{--                                            <div class="row">--}}
{{--                                                <button class="btn btn-primary">--}}
{{--                                                    <a class='text-white' href="{{ route('users.edit',$user->id) }}">Редактировать</a>--}}
{{--                                                </button>--}}
{{--                                                <form action="{{route('users.destroy',$user->id)}}"--}}
{{--                                                      method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <button type='submit' class="btn btn-danger ml-3">--}}
{{--                                                        Удалить--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Комментарий</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$user->comment}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
{{--                    <div class="card mt-3 col-10">--}}
{{--                        <div class="card-body table-responsive p-0">--}}
{{--                            <table class="table table-hover text-nowrap">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Текст задачи</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>{{$user->comment}}</td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}

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
