<?php 
include('conexion.php');

//crear tablas 
	function crearTablas()
	{
		$tbl_pacientes = "CREATE TABLE pacientes (id_paciente INT AUTO_INCREMENT, nombre VARCHAR(20), edad INT(10), domicilio VARCHAR(20), id_m INT, PRIMARY KEY(id_paciente))";
		$tbl_historial = "CREATE TABLE historial (id_hi INT AUTO_INCREMENT, edad INT(10), peso INT(10), sexo CHAR(1), PRIMARY KEY(id_hi))";		
		$tbl_medico = "CREATE TABLE medico (id_m INT AUTO_INCREMENT, nombre VARCHAR(20), no_consultorio VARCHAR(20), cedula_pro VARCHAR(10), tel VARCHAR(13), PRIMARY KEY(id_m))";	
		$tbl_turno = "CREATE TABLE turno(id_t INT AUTO_INCREMENT, turno CHAR(1), id_paciente INT, PRIMARY KEY(id_t))";
		$tbl_citas = "CREATE TABLE citas(id_cc INT AUTO_INCREMENT, id_paciente INT, id_m INT, id_t INT, PRIMARY KEY(id_cc))";		

		if(mysql_query($tbl_pacientes) && mysql_query($tbl_historial) && mysql_query($tbl_medico) && mysql_query($tbl_turno) && mysql_query($tbl_citas))
		{
			#echo "Se han creado las tablas satisfactoriamente";
		}


	}
	#crearTablas();
 ?>