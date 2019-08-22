<?php


class Db_connect
{
    public $user;
    public $pass;
    public $database_name;
    public $connect;

    public function __construct()
    {
        $this->user = "root";
        $this->pass = "1";
        $this->database_name = 'mysql:host=localhost;dbname=login';
    }

    public function connect()
    {
        try {
            $this->connect = new PDO($this->database_name, $this->user, $this->pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connect;
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
    }

    public function closeConnect()
    {
        $this->connect = NULL;
    }
}


