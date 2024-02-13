@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$machine->name}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Техника</li>
                            <li class="breadcrumb-item active">{{$machine->name}}</li>
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

                    <div class="col-12">
                        <div class="card mt-3 col-10">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название объекта</th>
                                        <th>Адрес</th>
                                        <th>Заказчик</th>
                                        <th>Срок</th>
                                        <th>Ответственный</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>Имя пользователя</td>
                                        <td>Email</td>
                                        <td>Дата регистрации</td>
                                        <td>Роль</td>
                                        <td>Действия</td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>Имя пользователя</td>
                                        <td>Email</td>
                                        <td>Дата регистрации</td>
                                        <td>Роль</td>
                                        <td>Действия</td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>Имя пользователя</td>
                                        <td>Email</td>
                                        <td>Дата регистрации</td>
                                        <td>Роль</td>
                                        <td>Действия</td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>Имя пользователя</td>
                                        <td>Email</td>
                                        <td>Дата регистрации</td>
                                        <td>Роль</td>
                                        <td>Действия</td>
                                    </tr>
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

    </div><!-- /.container-fluid -->


    <!-- /.content-wrapper -->
@endsection
