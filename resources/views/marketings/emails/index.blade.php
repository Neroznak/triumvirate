@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Почтовая рассылка</h1>

                        <a href="{{ route('marketings.emails.create') }}" class="btn btn-success">Добавить</a>

                        <a href="{{ route('marketings.index') }}" class="btn btn-primary">Назад</a>
                        <div style="display:none">
                            {{$id = 1}}
                        </div>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
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
                        <div class="card mt-3 col-12">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Дата отправки</th>
                                        <th>Название организации</th>
                                        <th>Почтовый адрес</th>
                                        <th>Кто отправил</th>
                                        <th>Статус</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($emails as $email)
                                        <tr>
                                            <td>{{$id}}</td>
                                            <div style="display:none">
                                                {{$id += 1}}
                                            </div>
                                            <td>{{$email->created_at}}</td>
                                            <td>{{$email->title}}</td>
                                            <td>{{$email->email}}</td>
                                            <td>{{$users[$email->performer-1]->surname.' '.mb_substr($users[$email->performer-1]->name, 0, 1).'.'.mb_substr($users[$email->performer-1]->patronymic, 0, 1).'.'}}</td>
                                            <td>{{$email->status}}</td>
                                            <td><a href="{{route('marketings.emails.edit', $email->id)}}"><i class="nav-icon far fas fa-pen"></i></a></td>
                                        </tr>
                                    @endforeach
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
