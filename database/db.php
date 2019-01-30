<?php


class db
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}