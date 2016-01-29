<?php

use Site\Models\User;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Точка входа в админ панель -- */
$view = new View();
/* -- Первое посещение, пустая страница -- */
if (empty($_POST['main']) && empty($_POST['galleryIns']) && empty($_POST['galleryDel'])
    && empty($_POST['trainsDel']) && empty($_POST['trainsUp']) && empty($_POST['trainsIns'])) {
    $view->admin('adminPan.php');
    die;
} else { /* -- Обработка данных пришедшие из формы -- */

    $admin = new User();
    /* -- Изменение главной страницы -- */
    if (isset($_POST['main'])) {
        $mass = [  /* -- Запрос заносится в массив для передачи данных модели -- */
            'title' => $_POST['title'],
            'text' => $_POST['text'],];
        //$user = new User();
        $admin->updateMainPage($mass); /* -- Получение результата выполнения запроса к БД -- */
        $view->admin('adminPan.php', $res); /* -- Вывод шаблона с результатом -- */
        //header('Location: /Control/admin.php'); /* -- Для варианта -- */
    }

    /* -- Изменение галереи -- */
    if (isset($_POST['galleryIns'])) {
        $mass = $_FILES['file'];
        $admin->insertImage($mass); /* -- Добавить фото -- */
        $view->admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }
    if (isset($_POST['galleryDel'])) {
        $mass = [
            'id' => $_POST['id'],
        ];
        $admin->deleteImage($mass); /* -- Удалить фото -- */
        $view->admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }

    /* -- Изменение расписания поездов -- */
    if (isset($_POST['trainsDel'])) {
        $mass = [
            'id' => $_POST['id'],
        ];
        $admin->deleteRecordTrains($mass); /* -- Удалить запись -- */
        $view->admin('adminPan.php', $res);
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
        $admin->updateRecordTrains($mass); /* -- Обновить запись -- */
        $view->admin('adminPan.php', $res);
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
        $admin->insertRecordTrains($mass); /* -- Добавить запись -- */
        $view->admin('adminPan.php', $res);
        //header('Location: /Control/admin.php');
    }
}