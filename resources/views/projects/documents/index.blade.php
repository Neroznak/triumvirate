@extends('layouts.main')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$project->title}} - документы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Проекты</a></li>
                            <li class="breadcrumb-item active">{{$project->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content-main ml-4">

            <form action="{{route('projects.documents.upload', $project->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="file">Выберите файл для загрузки:</label>
                <input type="file" name="file" accept=".pdf, .doc, .docx, .xls, .xlsx">
                <button type="submit">Загрузить</button>
            </form>

                @if(session('success'))
                    <div style="color: green;">{{ session('success') }}</div>
                @endif

            <hr>

            <h3>Скачать файл:</h3>
            <ul>
                <!-- Вывод списка файлов с возможностью скачивания -->
                @foreach(Storage::files('public_html/documents/'.$project->id) as $file)
                    <li><a href="{{route('projects.documents.download', [$project->id, basename($file)])}}">{{ basename($file) }}</a>
                    </li>
                @endforeach
            </ul>


        </div>
        <div class="ml-3">
            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Назад</a>
        </div>

    </div><!-- /.container-fluid -->


    <!-- /.content-wrapper -->

@endsection
