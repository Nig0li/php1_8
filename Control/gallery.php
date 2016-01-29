<?php
use Site\Models\table\Image;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Получение массива записей из БД -- */
$res = Image::findAll();

/* -- Передача полученного массива в шаблон -- */
$obView = new View();
$obView->assign('photo', $res);

/* -- Вывод шаблона на экран -- */
$obView->display('images.php');