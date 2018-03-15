<?php

class DB
{
    protected $dbh;

    public function __construct()
    {
        $conf = include __DIR__ . '/../data/config.php';
        $this->dbh = new PDO($conf['dsn'], $conf['user'], $conf['password']);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;

    }

    public function query(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)) {
            $data = $sth->fetchAll(PDO::FETCH_CLASS);
            return $data;
        } else {
            return false;
        }
    }

}