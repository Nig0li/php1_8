<?php

namespace Site\Models;

class DB
{
    protected $dbh;

    public function __construct()
    {
        $conf = include(__DIR__ . '/../config.php'); //подключение к конфигу с параметрами соединения
        $dsn = 'mysql:host=' . $conf['host'] . ';dbname=' . $conf['dbname']; //строка соединения
        $this->dbh = new \PDO($dsn, $conf['name'], $conf['pass']); //подключение к БД
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }


    public function query(string $sql, $className, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
        } else {
            return [];
        }
    }
}