@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$project->title}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Проекты</li>
                            <li class="breadcrumb-item active">{{$project->title}}</li>
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
                    <div>
                        <a href="{{ route('projects.execute', $project->id) }}" class="btn btn-danger">Ход выполнения</a>
                    </div>
                    <div class="ml-3">
                        <a href="{{ route('projects.documents.index', $project->id) }}" class="btn btn-info">Документы</a>
                    </div>
                    <div class="ml-3">
                        <a href="{{ route('projects.works.index', $project->id) }}" class="btn btn-success">Экономика</a>
                    </div>
                    <div class="ml-3">
                        <a href="{{route('projects.edit',$project->id)}}"
                           class="btn btn-warning">Редактировать проект</a>
                    </div>

                    <div class="ml-3">
                        <a href="{{ route('projects.index') }}" class="btn btn-primary">Назад</a>
                    </div>
                </div>

                <!-- Small boxes (Stat box) -->
                <div class="row">
{{--                    <div class=" mt-3 col-1 ml-3">--}}
{{--                    </div>--}}
                    <div class="card mt-3 col-6">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Позиция</th>
                                    <th>Значения</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Название объекта</td>
                                    <td>{{$project->title}}</td>
                                </tr>
                                <tr>
                                    <td>Заказчик</td>
                                    <td>{{$project->customer}}</td>
                                </tr>
                                <tr>
                                    <td>Адрес</td>
                                    <td style="padding: 8px; text-align: left; max-width: 200px; overflow: auto; white-space: normal; word-wrap: break-word;">{{$project->address}}</td>
                                </tr>
                                <tr>
                                    <td>Срок</td>
                                    <td>{{$project->deadline}}</td>
                                </tr>
                                <tr>
                                    <td>Договор</td>
                                    <td>{{$project->contract}}</td>
                                </tr>
                                <tr>
                                    <td>Статус</td>
                                    <td>{{$project->status}}</td>
                                </tr>
                                <tr>
                                    <td>Ответственный</td>
                                    <td>{{$project->response}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mt-3 ml-5 col-4">
                        <h3 class="card-title">Доля в выручке</h3>

                        <canvas id="myPieChart" width="100" height="100"></canvas>
                        <script>
                            var data = {
                                labels: ['Материалы', 'Работа', 'Прибыль'],
                                datasets: [{
                                    data: [{{$project->income}}, 30, 20], // Проценты или значения для каждой категории
                                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // Цвета секторов диаграммы
                                }]
                            };
                            var ctx = document.getElementById('myPieChart').getContext('2d');

                            var myPieChart = new Chart(ctx, {
                                type: 'pie',
                                data: data,
                            });
                        </script>
                    </div>
                    {{--                    </div>--}}
                </div>
            </div>
        </section>
        <!-- ./col -->

        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->

    </div><!-- /.container-fluid -->


    <!-- /.content-wrapper -->
@endsection
