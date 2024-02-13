@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="row">
                            <h1 class="m-0">{{$project->title.' - экономика'}}</h1>
                            <div class="row">
                                <a href="{{ route('projects.works.create', $project->id) }}"
                                   class="btn btn-success ml-2">Добавить</a>
                                <a href="{{ route('projects.show',$project->id) }}" class="btn btn-primary ml-2">Назад к
                                    проекту</a>
                            </div>
                            {{--                            <a href="{{ route('projects.archieve') }}" class="btn btn-primary ml-2">Архив</a>--}}
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{--                            <li class="breadcrumb-item"><a href="#">Сотрудники</a></li>--}}
                            {{--                            <li class="breadcrumb-item active">Список сотрудников</li>--}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="card mt-3 col-12">
                        <div class="card-body table-responsive p-0 mb-4">
                            <div class="row">
                            </div>
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Номер</th>
                                    <th>Наименование траты</th>
                                    <th>Ед.изм</th>
                                    <th>Кол-во</th>
                                    <th>Цена за ед.</th>
                                    <th>Стоимость</th>
                                    <th>Способ оплаты</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <div style="display: none">
                                    {{ $id = 1 }}
                                    {{$total_super = 0}}
                                </div>
                                @foreach($works as $work)
                                    @if($work->project_id === $project->id)
                                        <tr>
                                            <td>{{$id}}</td>
                                            <div style="display: none">
                                                {{ $id += 1 }}
                                            </div>
                                            <td>{{$work->title}}</td>
                                            <td>{{$work->measure}}</td>
                                            <td>{{$work->amount}}</td>
                                            <td>{{$work->cost}}</td>
                                            <td>{{$work->total}}</td>
                                            <div style="display: none">
                                                {{ $total_super += $work->total }}
                                            </div>
                                            <td>{{$work->comment}}</td>
                                            <td>
                                                <div class="row">
                                                    <button class="btn btn-primary ml-2">
                                                        <a class='text-white'
                                                           href="{{ route('projects.works.edit',[$project->id, $work->id]) }}"><i
                                                                class="nav-icon far fas fa-pen"></i></a>
                                                    </button>
                                                    <form
                                                        action="{{route('projects.works.destroy', [$project->id, $work->id])}}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type='submit' class="btn btn-danger ml-2">
                                                            <i class="nav-icon far fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th>Итого расходов</th>
                                    <td>{{$total_super}}</td>
                                    <td></td>
                                    <td>                            <form action="{{ route('projects.update.expense', $project->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
                                            <div class="card-body">
                                                <div style="display:none" class="form-group">
                                                    <input type="text" id='name' name='expense' class="form-control"
                                                           value="{{$total_super}}">
                                                    @error('expense')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
