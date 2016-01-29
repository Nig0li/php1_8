<?php

namespace Site\Models;

abstract class Ancestor
{
    const TABLE = '';

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::TABLE;
        //var_dump($sql);
        $obDB = new DB();
        $rez = $obDB->query($sql, static::class);
        return $rez;
    }

    public static function findById($id)
    {
        //var_dump($id);
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        //var_dump($sql);
        $mass = [
            ':id' => $id,
        ];
        $obDB = new DB();
        $rez = $obDB->query($sql, static::class, $mass);
        foreach ($rez as $img) {
            return $img;
        }
    }
}