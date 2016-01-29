<?php

use Site\Models\Admin;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Точка входа в админ панель -- */

/* -- Первое посещение, пустая страница -- */
if (empty($_POST['main']) && empty($_POST['galleryIns']) && empty($_POST['galleryDel'])
    && empty($_POST['trainsDel']) && empty($_POST['trainsUp']) && empty($_POST['trainsIns'])) {
    View::admin('adminPan.php');
    die;
} else { /* -- Обработка данных пришедшие из формы -- */

    /* -- Изменение главной страницы -- */
    if (isset($_POST['main'])) {
        $mass = [  /* -- Запрос заносится в массив для передачи данных модели -- */
            'title' => $_POST['title'],
            'text' => $_POST['text'],];
        $res = Admin::updateMain($mass); /* -- Получение результата выполнения запроса к БД -- */
        View::admin('adminPan.php', $res); /* -- Вывод шаблона с результатом -- */
        //header('Location: /Control/admin.php'); /* -- Для варианта -- */
    }

    /* -- Изменение галереи -- */
    if (isset($_POST['galleryIns'])) {
        $mass = $_FILES['file'];
        $res = Admin::insertGallery($mass); /* -- Добавить фото -- */
        View::admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }
    if (isset($_POST['galleryDel'])) {
        $mass = [
            'id' => $_POST['id'],
        ];
        $res = Admin::deleteGallery($mass); /* -- Удалить фото -- */
        View::admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }

    /* -- Изменение расписания поездов -- */
    if (isset($_POST['trainsDel'])) {
        $mass = [
            'id' => $_POST['id'],
        ];
        $res = Admin::deleteTrains($mass); /* -- Удалить запись -- */
        View::admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }
    if (isset($_POST['trainsUp'])) {
        $mass = [
            'id' => $_POST['id'],
            'dat' => $_POST['dat'],
            'numb' => $_POST['numb'],
            'timeDep' => $_POST['timeDep'],
            'timeArr' => $_POST['timeArr'],
            'timeTravel' => $_POST['timeTravel'],
        ];
        $res = Admin::updateTrains($mass); /* -- Обновить запись -- */
        View::admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }
    if (isset($_POST['trainsIns'])) {
        $mass = [
            'dat' => $_POST['dat'],
            'numb' => $_POST['numb'],
            'timeDep' => $_POST['timeDep'],
            'timeArr' => $_POST['timeArr'],
            'timeTravel' => $_POST['timeTravel'],
        ];
        $res = Admin::insertTrains($mass); /* -- Добавить запись -- */
        View::admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }
}