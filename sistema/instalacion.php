<?php
require_once 'modelo.php';

class Instalacion extends Modelo
{
    public function __construct() {
        parent::__construct();
    }
    
    public function crear_db()
    {
        $sql = "CREATE DATABASE consultorio";
        
        if($this->_db->query($sql))
        {
            echo "Base de datos creada correctamente<br>";
        }
        else
        {
            echo "Error al crear la base de datos<br>";
        }
        
        $this->_db->close();
         
    }
}

$obj = new Instalacion();
$obj->crear_db();
