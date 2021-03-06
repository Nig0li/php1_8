<?php
use Site\Models\table\Image;
use Site\View\classes\View;

require __DIR__ . '/../autoload.php';

/* -- Получение одной записи из БД по ID -- */
$img = Image::findById($_GET['id']);

/* -- Передача полученой записи в шаблон -- */
$obView = new View();
$obView->assign('img', $img);

/* -- Вывод шаблона на экран -- */
$obView->display('imgOne.php');