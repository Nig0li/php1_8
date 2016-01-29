<?php
use Site\Models\table\TimetableRecord;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Получение массива записей из БД -- */
$res = TimetableRecord::findAll();

/* -- Передача полученного массива в шаблон -- */
$obView = new View();
$obView->assign('train', $res);

/* -- Вывод шаблона на экран -- */
$obView->display('timetable.php');