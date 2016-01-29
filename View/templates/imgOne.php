<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/../View/style/style.css">
    <title>Фото</title>
</head>
<body>
<div id="site">
    <!-- Шапка сайта-->
    <div id="header">
        <h1>Сайт г.Тольятти</h1>
        <!-- Ссылка на Админ-панель -->
        <a href="/../Control/admin.php"><span id="admin">Админ-панель</span></a>
    </div>

    <!-- Контент -->
    <div id="content">

        <!-- Ссылки на Главную, Галерея Расписание -->
        <p id="links">
            <a href="/Control/index.php">На главную</a>
            <a href="/Control/gallery.php">Галерея</a>
            <a href="/Control/trains.php">Расписание поездов</a>
        </p>

        <!-- Вывод фото по id -->
        <p>&nbsp;</p>
        <img src="/../View/img/<?php echo $img->getName(); ?>" alt="Картинка">
    </div>
</div>
</body>
</html>
