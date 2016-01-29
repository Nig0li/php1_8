<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../View/style/style.css">
    <title>Расписание</title>
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

        <!-- Ссылки на Главную и Галерею -->
        <p id="links">
            <a href="/Control/index.php">На главную</a>
            <a href="/Control/gallery.php">Галерея</a>
            <strong id="strong">Расписание поездов</strong>
        </p>

        <!-- Вывод расписания -->
        <p>&nbsp;</p>
        <table>
            <tr>
                <td>Дата</td>
                <td>Номер рейса</td>
                <td>Время отправления</td>
                <td>Время прибытия</td>
                <td>Время в пути</td>
            </tr>
            <?php foreach ($train as $txt) : ?>
                <tr>
                    <td><?php echo $txt->getDate(); ?></td> <!-- Дата -->
                    <td><?php echo $txt->getNumber(); ?></td> <!-- Номер рейса -->
                    <td><?php echo $txt->getDep(); ?></td> <!-- Время отправления -->
                    <td><?php echo $txt->getArr(); ?></td> <!-- Время прибытия -->
                    <td><?php echo $txt->getTravel(); ?></td> <!-- Время в пути -->
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</body>
</html>