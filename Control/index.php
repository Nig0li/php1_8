<?php
use Site\Models\table\Main;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Получение массива записей из БД -- */
$res = Main::findAll();

/* -- Передача полученного массива в шаблон -- */
$obView = new View();
$obView->assign('main', $res);

/* -- Вывод шаблона на экран -- */
$obView->display('main.php');