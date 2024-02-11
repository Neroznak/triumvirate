document.addEventListener('DOMContentLoaded', function () {
    var container = document.getElementById('excel-editor');
    var hot = new Handsontable(container, {
        data: [[]], // Начальные данные
        rowHeaders: true,
        colHeaders: true,
        contextMenu: true,
        minSpareRows: 1, // Минимальное количество пустых строк в конце таблицы
        minSpareCols: 1, // Минимальное количество пустых столбцов в конце таблицы
    });
});

function saveChanges() {
    var data = hot.getData();
    // Отправьте данные на сервер или выполните другие действия
    console.log('Сохранено:', data);
}

function saveChanges() {
    var data = hot.getData();

    axios.post('/save-data', { data: data })
        .then(function (response) {
            console.log('Сервер ответил:', response.data);
        })
        .catch(function (error) {
            console.error('Ошибка:', error);
        });
}
