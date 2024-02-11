@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            {{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
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
                    <div class="col-lg-4 card card-success ml-3">
                        <div class="card-header">
                            <h3 class="card-title">Заказчики</h3>
                        </div>
                        <canvas id="myPieChart" width="100" height="100"></canvas>
                        <script>
                            var data = {
                                labels: ['МЕТРО', 'АШАН', 'Корнер'],
                                datasets: [{
                                    data: [50, 30, 20], // Проценты или значения для каждой категории
                                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // Цвета секторов диаграммы
                                }]
                            };
                            var ctx = document.getElementById('myPieChart').getContext('2d');

                            var myPieChart = new Chart(ctx, {
                                type: 'pie',
                                data: data,
                            });
                        </script>
                        <!-- /.card-body -->
                    </div>
                    <div class="col-lg-4 card card-success ml-3">
                        <div class="card-header">
                            <h3 class="card-title">Работы</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="myPieChart2" width="100" height="100"></canvas>
                            <script>
                                var data = {
                                    labels: ['Асфальтирование', 'Инж.сети', 'Вывоз снега'],
                                    datasets: [{
                                        data: [50, 30, 20], // Проценты или значения для каждой категории
                                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // Цвета секторов диаграммы
                                    }]
                                };
                                var ctx = document.getElementById('myPieChart2').getContext('2d');

                                var myPieChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: data,
                                });
                            </script>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="col-lg-3 card ml-5">
                        <div class="card-header">
                            <h3 class="card-title">Новости</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">

                                <tbody>
                                <tr>
                                    <td>El puente готов.</td>
                                </tr>
                                <tr>
                                    <td>Все новости будут публиковаться тут</td>

                                </tr>
                                <tr>
                                    <td>Да да. Абсолютно все</td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>


                <!-- /.card -->

            </div>
            <!-- ./col -->

            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- ВЫРУЧКА-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Выручка
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart"
                                     style="position: relative; height: 300px;">
                                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="sales-chart"
                                     style="position: relative; height: 300px;">
                                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>

                </section>

            </div>
            <!-- /.row (main row) -->
        </section>

    </div><!-- /.container-fluid -->


    <!-- /.content-wrapper -->
@endsection
