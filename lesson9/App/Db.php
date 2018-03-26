<?php

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $data = include __DIR__ . '/../data/config.php';
        $this->dbh = new \PDO($data['dsn'], $data['user'], $data['password']);
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        return $res;
    }

    public function query(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (false != $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS);
        } else {
            return false;
        }
    }


}