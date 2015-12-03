<?php
require_once("config.php");
class Modelo{
    protected $cn;
    public function __construct() {
        $this->cn = new mysqli(DB_HOST, DB_USERS, PASS);
        if($this->cn->connect_errno)
        {
            echo "Fallo la conexion<br>";
            return;
        }
        else
        {
            echo "Conexion satisfactoria<br>";
        }
    }
}
#$obj = new Modelo();
