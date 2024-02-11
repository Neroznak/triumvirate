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
                        <form action="{{ route('projects.update', $project->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for='name'>Название проекта</label>
                                    <input type="text" id='name' name='title' class="form-control"
                                           placeholder="Введите название проекта"
                                           value="{{$project->title}}"> @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Адрес объекта</label>
                                    <input type="text" id='name' name='address' class="form-control"
                                           placeholder="Введите адрес объекта" value="{{$project->address}}">
                                    @error('address')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Заказчик</label>
                                    <select type="text" id='name' name='customer' class="form-control">
                                        @foreach($companies as $company)
                                            <option>
{{--                                                {{$company->id === $project->customer->id ? 'selected' : ''}}--}}
                                                {{$company->name}}</option>
                                        @endforeach
                                    </select>
                                        @error('customer')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="dob">Cрок реализации</label>
                                    <input type="date" id="dob" name="deadline" class="form-control" value="{{$project->deadline}}">
                                    @error('deadline')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Договор</label>
                                    <input type="text" id='name' name='contract' class="form-control"
                                           placeholder="Введите номер и дату договора" value="{{$project->contract}}">
                                    @error('contract')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Статус</label>
                                    <select type="text" id='name' name='status' class="form-control">
                                        <option>Сделать КП</option>
                                        <option>В работе</option>
                                        <option>На подписании</option>
                                        <option>Ожидает оплаты</option>
                                        <option>Архив</option>
                                    </select>
                                    @error('status')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for='name'>Ответственный</label>
                                    <input type="text" id='name' name='response' class="form-control"
                                           placeholder="Введите имя ответственного" value="{{$project->response}}">
                                    @error('response')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for='name'>Выручка</label>
                                    <input type="text" id='name' name='income' class="form-control"
                                           placeholder="Введите выручку по смете" value="{{$project->income}}">
                                    @error('income')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>
{{--                        <form action="{{route('projects.destroy',$project->id)}}"--}}
{{--                              method="post">--}}
{{--                            @csrf--}}
{{--                            @method('delete')--}}
{{--                            <button type='submit' class="btn btn-danger ml-2">--}}
{{--                                Удалить--}}
{{--                            </button>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
