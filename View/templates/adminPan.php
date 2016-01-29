<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/../View/style/style.css">
    <title>Админ-панель</title>
</head>
<body id="admin">
<div id="site">
    <!-- Шапка сайта-->
    <div id="header">
        <h1>Сайт г.Тольятти</h1>
    </div>

    <!-- Контент -->
    <div id="content">
        <h1>Админ - панель</h1>

        <!-- Результат выполнения -->
        <p id="res"><?php echo $res; ?></p><br>

        <!-- Редактирование главной страницы -->
        <div id="main">
            <strong>Главная страница:</strong> <a href="/../../Control/index.php">Посмотреть результат</a>
            <form action="/../../Control/admin.php" method="post">
                Заголовок <br>
                <input type="text" name="title"><br>
                Содержание <br>
                <textarea name="text"></textarea>
                <br>
                <input type="submit" name="main" value="Сохранить">
            </form>
        </div>

        <!-- Редактирование галереи -->
        <div id="gallery">
            <strong>Галерея:</strong> <a href="/../../Control/gallery.php">Посмотреть результат</a>

            <!-- Добавить фото -->
            <p>Добавить фото:</p>
            <form action="/../../Control/admin.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <input type="submit" name="galleryIns" value="Сохранить">
            </form><br>
            <strong>****************</strong>

            <!-- Удалить фото -->
            <p>Удалить фото:</p>
            <form action="/../../Control/admin.php" method="post">
                id<br>
                <input type="text" name="id"><br>
                <input type="submit" name="galleryDel" value="Сохранить">
            </form>
            <br>
        </div>

        <!-- Редактирование расписания поездов -->
        <div id="trains">
            <strong>Расписание:</strong> <a href="/../../Control/trains.php">Посмотреть результат</a>

            <!-- Удалить запись -->
            <p>Удалить запись:</p>
            <form action="/../../Control/admin.php" method="post">
                id<br>
                <input type="text" name="id"><br>
                <input type="submit" name="trainsDel" value="Сохранить">
            </form>
            <br>
            <strong>****************</strong>

            <!-- Обновить запись -->
            <p>Обновить запись:</p>
            <form action="/../../Control/admin.php" method="post">
                id<br>
                <input type="text" name="id"><br>
                Дата <br>
                <input type="text" name="dat"><br>
                Номер рейса <br>
                <input type="text" name="numb"><br>
                Время отправления <br>
                <input type="text" name="timeDep"><br>
                Время прибытия <br>
                <input type="text" name="timeArr"><br>
                Время в пути <br>
                <input type="text" name="timeTravel"><br>
                <input type="submit" name="trainsUp" value="Сохранить">
            </form>
            <br>
            <strong>****************</strong>

            <!-- Добавить запись -->
            <p>Добавить запись:</p>
            <form action="/../../Control/admin.php" method="post">
                Дата <br>
                <input type="text" name="dat"><br>
                Номер рейса <br>
                <input type="text" name="numb"><br>
                Время отправления <br>
                <input type="text" name="timeDep"><br>
                Время прибытия <br>
                <input type="text" name="timeArr"><br>
                Время в пути <br>
                <input type="text" name="timeTravel"><br>
                <input type="submit" name="trainsIns" value="Сохранить">
            </form>
            <br>
        </div>
    </div>
</div>
</body>
</html>