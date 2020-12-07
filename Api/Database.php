<?php

namespace Api;


class Database
{
public static function getDb()
{
    $opcoes = array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION);
    $conn = new \PDO('mysql:host=127.0.0.1;dbname=mosyle', 'root','root', $opcoes);
    return $conn;
}
}