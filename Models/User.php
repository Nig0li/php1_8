<?php

namespace Site\Models;


class User
{
    protected function ident($sql, $mas) //Запрос к БД
    {
        $db = new DB();
        $res = $db->execute($sql, $mas);
        if (false !== $res) {
            $res = 'Изменение прошло успешно!';
        } else {
            $res = 'Что-то пошло не так :((';
        }
        return $res;
    }

    /* Главная страница*/
    public function updateMainPage($mass) //Обновить главную страниу
    {
        //var_dump($mass);
        $sql = 'UPDATE main SET title=:title, text=:text WHERE id=1'; //Строка только одна
        $mas = [
            ':title' => strip_tags($mass['title']),
            ':text' => strip_tags($mass['text']),
        ];
        $res = self::ident($sql, $mas);
        return $res;
    }

    /* Фотогалерея*/
    public function insertImage($mass) //Добавить фотографию
    {
        if (0 !== $mass['error']) {
            $res = 'Файл не загружен';
        } else {
            move_uploaded_file($mass['tmp_name'], __DIR__ . '/../View/img/' . $mass['name']);
            $sql = 'INSERT INTO gallery(name) VALUES(:name)';
            $mas = [':name' => strip_tags($mass['name'])];
            $res = self::ident($sql, $mas);
        }
        return $res;
    }

    public function deleteImage($mass) //Удалить фото по Id
    {
        $sql = 'DELETE FROM gallery WHERE id=:id';
        $mass = [
            ':id' => strip_tags($mass['id']),
        ];
        if (empty($mass['id'])){ //Проверка, чтобы id не был пустым
            $res = 'Изменение не может быть выполнено. Не указан ID';
        } else {
            $res = self::ident($sql, $mass);
        }
        return $res;
    }

    /* Расписание поездов*/
    public function deleteRecordTrains($mass) //Удалить запись по Id
    {
        $sql = 'DELETE FROM trains WHERE id=:id';
        $mass = [
            ':id' => strip_tags($mass['id']),
        ];
        if (empty($mass['id'])){ //Проверка, чтобы id не был пустым
            $res = 'Изменение не может быть выполнено. Не указан ID';
        } else {
            $res = self::ident($sql, $mass);
        }
        return $res;
    }

    public function updateRecordTrains($mass) //Обновить запись
    {
        $sql = 'UPDATE trains
                SET dat=:dat, numb=:numb, timeDep=:timeDep, timeArr=:timeArr, timeTravel=:timeTravel
                WHERE id=:id';
        $mas = [
            ':id' => strip_tags($mass['id']),
            ':dat' => strip_tags($mass['dat']),
            ':numb' => strip_tags($mass['numb']),
            ':timeDep' => strip_tags($mass['timeDep']),
            ':timeArr' => strip_tags($mass['timeArr']),
            ':timeTravel' => strip_tags($mass['timeTravel']),
        ];
        if (empty($mas['id'])){
            $res = 'Изменение не может быть выполнено. Не указан ID'; //Проверка, чтобы id не был пустым
        } else {
            $res = self::ident($sql, $mass);
        }
        return $res;
    }

    public function insertRecordTrains($mass) // Добавить запись
    {
        $sql = 'INSERT INTO trains(dat, numb, timeDep, timeArr, timeTravel)
                VALUES (:dat, :numb, :timeDep, :timeArr, :timeTravel)';
        $mas = [
            ':dat' => strip_tags($mass['dat']),
            ':numb' => strip_tags($mass['numb']),
            ':timeDep' => strip_tags($mass['timeDep']),
            ':timeArr' => strip_tags($mass['timeArr']),
            ':timeTravel' => strip_tags($mass['timeTravel']),
        ];
        $res = self::ident($sql, $mas);
        return $res;
    }
}
