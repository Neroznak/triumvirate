@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Спецтехника</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Cпецтехника</li>
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
                    <a href="{{ route('machines.create') }}" class="btn btn-primary">Добавить</a>
                </div>
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
                                        <th>Название машины</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($machines as $machine)
                                    <tr>
                                        <td>{{$machine->id}}</td>
                                        <td>{{$machine->name}}</td>
                                        <td><div class="row">
                                                <button class="btn btn-primary">
                                                    <a class='text-white' href="{{ route('machines.edit',$machine->id) }}">Редактировать</a>
                                                </button>
                                                <form action="{{route('machines.destroy',$machine->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type='submit' class="btn btn-danger ml-3">
                                                        Удалить
                                                    </button>
                                                </form>
                                            </div></td>
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
