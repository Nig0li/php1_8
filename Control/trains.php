<?php
use Site\Models\table\Trains;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Получение массива записей из БД -- */
$res = Trains::findAll();

/* -- Передача полученного массива в шаблон -- */
$obView = new View();
$obView->assign('train', $res);

/* -- Вывод шаблона на экран -- */
$obView->display('timetable.php');