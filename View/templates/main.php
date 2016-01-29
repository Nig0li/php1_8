<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../View/style/style.css">
    <title>Главная страница</title>
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

        <!-- Ссылки -->
        <p id="links">
            <strong id="strong">Главная</strong>
            <a href="/Control/gallery.php">Галерея</a>
            <a href="/Control/trains.php">Расписание поездов</a>
        </p>

        <!-- Вывод текста приветствия -->
        <?php foreach ($main as $txt) : ?> <!-- Форыч, если понадобится вывод массива записей из БД -->
            <p><?php echo $txt->getTitle(); ?></p> <!-- Заголовок -->
            <p id="cont"><?php echo $txt->getText(); ?></p> <!-- Содержание -->
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>