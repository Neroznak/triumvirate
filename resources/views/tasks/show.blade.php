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
                            <li class="breadcrumb-item active">Просмотр задачи</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <a href="{{ route('tasks.index')}}" class="btn btn-primary">К задачам</a>
                    </div>
                    <div class="col-1">
                            <a href="{{route('tasks.edit',$task->id)}}"
                               class="btn btn-warning">Редактировать</a>
                    </div>
                    <div class="col-1 ml-4">
                        <form action="{{route('tasks.destroy',$task->id)}}"
                              method="post">
                            @csrf
                            @method('delete')
                            <button type='submit' class="btn btn-danger ml-3">
                                Удалить
                            </button>
                        </form>
                    </div>
                    @if(is_numeric($task->project_id))
                        <div class="col-2">
                            <button class="btn btn-info">
                                <a class='text-white' href="{{ route('projects.show',[$task->project_id]) }}">Перейти в проект</a>
                            </button>
                        </div>
                    @endif
                </div>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="card mt-3 col-10">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Название задачи</th>
                                    <th>Руководитель</th>
                                    <th>Исполнитель</th>
                                    <th>Срок</th>
                                    <th>Статус</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$task->title}}</td>
                                    <td>{{$users[$task->tasked-1]->surname.' '.mb_substr($users[$task->tasked-1]->name, 0, 1).'.'.mb_substr($users[$task->tasked-1]->patronymic, 0, 1).'.'}}</td>
                                    <td>{{$users[$task->performer-1]->surname.' '.mb_substr($users[$task->performer-1]->name, 0, 1).'.'.mb_substr($users[$task->performer-1]->patronymic, 0, 1).'.'}}</td>
                                    <td>{{$task->deadline}}</td>
                                    <td>{{$task->status}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Текст задачи</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$task->comment}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3 col-12 ">
                        <div class="row">
                            <h3 class="mt-2">Ход работы</h3>
                            <div class="col-1">
                                <a href="{{ route('tasks.updates.create' , $task->id) }}" class="btn btn-success">Добавить</a>
                            </div>
                        </div>


                        <div class="card card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Дата обновления</th>
                                    <th scope="col">Пояснение</th>
                                    <th scope="col">Исполнитель</th>
                                    <th scope="col">Новый статус</th>
                                    <th scope="col">Действия</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($updates as $update)
                                    @if($update->task_id === $task->id)
                                        <tr>
                                            <td>{{$update->updated_at}}</td>
                                            <td>{{$update->title}}</td>
                                            <td>{{$users[$update->performer-1]->surname.' '.mb_substr($users[$update->performer-1]->name, 0, 1).'.'.mb_substr($users[$update->performer-1]->patronymic, 0, 1).'.'}}</td>
                                            <td>{{$update->status}}</td>
{{--                                            <td><button class="btn btn-primary">Показать текст</button></td>--}}
                                            <td>
                                                <div class="row">
                                                    <button class="btn btn-primary">
                                                        <a class='text-white'
                                                           href="{{ route('tasks.updates.edit',[$task->id, $update->id]) }}"><i class="nav-icon far fas fa-pen"></i></a>
                                                    </button>
                                                    <form
                                                        action="{{route('tasks.updates.destroy', [$task->id, $update->id])}}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type='submit' class="btn btn-danger ml-3">
                                                            <i class="nav-icon far fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
{{--                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
{{--                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>--}}
{{--                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}

{{--                            <script>--}}
{{--                                $(document).ready(function() {--}}
{{--                                    // Здесь ваша переменная с текстом--}}
{{--                                    var $text = $update->text;--}}

{{--                                    // Добавляем кнопку и обработчик события клика для каждой строки таблицы--}}
{{--                                    $('tbody tr').each(function() {--}}
{{--                                        var $button = $('<button class="btn btn-primary">Показать текст</button>');--}}
{{--                                        $(this).find('td:last-child').append($button);--}}

{{--                                        $button.click(function() {--}}
{{--                                            var $descriptionDiv = $('<div class="description" style="display: none;">' + $text + '</div>');--}}
{{--                                            $(this).closest('tr').after($descriptionDiv);--}}
{{--                                            $descriptionDiv.toggle();--}}
{{--                                        });--}}
{{--                                    });--}}
{{--                                });--}}
{{--                            </script>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->


        </section>
    </div><!-- /.container-fluid -->


    <!-- /.content-wrapper -->
@endsection
