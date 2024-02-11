<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка и скачивание файлов</title>
</head>
<body>



<form action="/upload-file" method="post" enctype="multipart/form-data">
    @csrf
    <label for="file">Выберите файл для загрузки:</label>
    <input type="file" name="file" accept=".pdf, .doc, .docx">
    <button type="submit">Загрузить</button>
</form>
@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
<hr>

<h3>Скачать файл:</h3>
<ul>
    <!-- Вывод списка файлов с возможностью скачивания -->
    @foreach(Storage::files('public') as $file)
        <li><a href="{{ url('/download-file/' . basename($file)) }}">{{ basename($file) }}</a></li>
    @endforeach
</ul>

</body>
</html>
