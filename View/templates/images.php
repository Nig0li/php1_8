<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/../View/style/style.css">
    <title>Галерея</title>
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

        <!-- Ссылки на Главную и Расписание -->
        <p id="links">
            <a href="/Control/index.php">На главную</a>
            <strong id="strong">Галерея</strong>
            <a href="/Control/trains.php">Расписание поездов</a>
        </p>
        <p>&nbsp;</p>

        <!-- Вывод всех фото -->
        <?php //var_dump($photo);
        foreach ($photo as $img) :?>
            <a href="/../Control/img.php?id=<?php echo $img->getId() ?>">
                <img src="/../View/img/<?php echo $img->getName(); ?>" alt="Картинка">
            </a>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>