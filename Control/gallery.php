<?php
use Site\Models\table\Gallery;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Получение массива записей из БД -- */
$res = Gallery::findAll();

/* -- Передача полученного массива в шаблон -- */
$obView = new View();
$obView->assign('photo', $res);

/* -- Вывод шаблона на экран -- */
$obView->display('images.php');