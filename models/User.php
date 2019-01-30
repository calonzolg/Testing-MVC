<?php
/**
 * Created by PhpStorm.
 * User: calonzo
 * Date: 01-30-19
 * Time: 08:19 AM
 */

class User
{
    private $db;
    private $users;

    public function __construct(){
        $this->db=db::conexion();
        $this->users=array();
    }

    public function getUsers(){
        $consulta=$this->db->query("select * from users;");
        while($filas=$consulta->fetch_assoc()){
            $this->users[]=$filas;
        }
        return $this->users;
    }

}