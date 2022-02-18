<?php
class Connect {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'metak';

    protected function db(){
        try {
           $db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->user, $this->pass);
           $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $db;
        } catch (PDOExeption $e) {
           echo 'Xəta: '.$e;
        }
    }
}
