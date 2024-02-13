@extends('layouts.main')
@section('content')
    <div class="content-wrapper kanban">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <h1>Проекты</h1>
                            <a href="{{ route('projects.index') }}" class="btn btn-primary ml-2">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content pb-3">
            <div class="container-fluid h-100">
                <div class="card card-row card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Архив
                        </h3>
                    </div>
                    <div class="card-body">
                        @foreach($projects as $project)
                            @if($project->status === 'Архив')
                                <div class="card card-secondary card-outline">
                                    <a href="{{route('projects.show',$project->id)}}">
                                        <font color="black">
                                        <div class="card-header">
                                            <h5 class="card-title">{{$project->title}}</h5>
                                        </div>
                                        </font>
                                    </a>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
