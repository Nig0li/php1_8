<?php

function __autoload($className)
{
    //echo $className;
    $classNamePars = explode('\\', $className); //получаем полное имя класса
    //var_dump($classNamePars);
    unset($classNamePars[0]); //удаляем первый эллемент Site
    //var_dump($classNamePars); //массив без Site
    $className = implode('/', $classNamePars); //объединяем элементы массива в строку, разделяя прямым слешем
    //var_dump($className); // Получаем строку пути до класса
    require __DIR__ . '/' . $className . '.php';
}