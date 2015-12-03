<?php
require_once 'modelo.php';
class Instalacion extends Modelo
{
    public function __construct() {
        parent::__construct();
    }
    private $db = "CREATE DATABASE consultorio_medico";
    public function crear_db()
    {
        $sql = $this->db;
        
        if($this->cn->query($sql))
        {
            echo "Base de datos creada correctamente<br>";
        }
        else
        {
            echo "Error al crear la base de datos<br>";
        }
        
        $this->cn->close();
         
    }
    // //Crear tablas de la base de datos
    // public function crear_tabla_paciente()
    // {
    //     $base = $this->db;
    //     $sql = "CREATE TABLE (id_paciente INT NOT NULL, nombre VARCHAR(20) NOT NULL, direc VARCHAR(20) NOT NULL, tel VARCHAR(20), fn DATE NOT NULL, mun VARCHAR(20) )";
    //     if($this->cn->query($base, $sql))
    //     {
    //         echo "tabla creada correctamente<br>";
    //     } 
    //     else 
    //     {
    //         echo "la tabla no se pudo crear";
    //     }
    //     $this->cn->close();
    // }
}

$obj = new Instalacion();
#$obj->crear_db();
$obj->crear_tabla_paciente();   