<?php


class db
{
    public static function connection()
    {
        $connection = new mysqli("localhost", "root", "", "mvc");
        $connection->query("SET NAMES 'utf8'");
        return $connection;
    }
}