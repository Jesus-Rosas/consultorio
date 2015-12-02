<?php
require_once("config.php");
class Modelo{
    protected $_db;
    public function __construct() {
        $this->_db = new mysqli(DB_HOST, DB_USERS, PASS);
        if($this->_db->connect_errno)
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

