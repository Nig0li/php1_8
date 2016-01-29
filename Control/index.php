<?php
use Site\Models\table\MainRecord;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Получение массива записей из БД -- */
$res = MainRecord::findAll();

/* -- Передача полученного массива в шаблон -- */
$obView = new View();
$obView->assign('main', $res);

/* -- Вывод шаблона на экран -- */
$obView->display('main.php');