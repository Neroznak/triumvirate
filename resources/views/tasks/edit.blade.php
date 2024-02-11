@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Отделы</h1>
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
                        <form action="{{ route('tasks.update', $task->id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for='name'>Название задачи</label>
                                    <input type="text" id='name' name='title' class="form-control"
                                           placeholder="Введите название задачи" value="{{$task->title}}">
                                    @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Описание  задачи</label>
                                    <textarea type="text" id='name' name='comment' class="form-control"
                                              placeholder="текст">{{$task->comment}}</textarea>
                                    @error('comment')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="dob">Cрок реализации</label>
                                    <input type="date" id="dob" name="deadline" class="form-control" value="{{$task->deadline}}">
                                    @error('deadline')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Исполнитель</label>
                                    <select type="text" id='name' name='performer' class="form-control">
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->surname.' '.mb_substr($user->name, 0, 1).'.'.mb_substr($user->patronymic, 0, 1).'.'}}</option>
                                        @endforeach
                                    </select>
                                    @error('performer')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Статус</label>
                                    <select type="text" id='name' name='status' class="form-control">

                                            <option>Необходимо выполнить</option>
                                            <option>В процессе</option>
                                            <option>Сделано</option>
                                            <option>Архив</option>

                                    </select>
                                    @error('status')
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
