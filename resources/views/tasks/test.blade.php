<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текст под строкой таблицы</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Название</th>
        <th scope="col">Описание</th>
        <th scope="col">Действие</th> <!-- Новая колонка для кнопок -->
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Элемент 1</td>
        <td>Описание элемента 1</td>
        <td><button class="btn btn-primary">Показать текст</button></td> <!-- Кнопка для показа текста -->
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Элемент 2</td>
        <td>Описание элемента 2</td>
        <td><button class="btn btn-primary">Показать текст</button></td> <!-- Кнопка для показа текста -->
    </tr>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('tbody tr').each(function() {
            var description = $(this).find('td:nth-child(3)').text();
            var descriptionDiv = $('<div class="description" style="display: none;">' + description + '</div>');
            $(this).after(descriptionDiv);

            // Добавляем обработчик события клика на кнопку
            $(this).find('button').click(function() {
                var target = $(this).closest('tr').next('.description');
                target.toggle(); // Показываем или скрываем текст
            });
        });
    });
</script>

</body>
</html>
