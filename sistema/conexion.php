<?php 

	#Configuracion de la base de datos
	$bd_host = "localhost";
	$bd_usuario = "root";
	$bd_password = "corel2011";
	$bd_base = "consultorio_medico";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password, $bd_base) or die("Problemas con la conexion");
	//Seleccionar la base de datos
	if(mysql_select_db($bd_base, $con))
	{
		#echo "se ha seleccionado correctamente la BD<br>";
	}
	else 
	{
		$sql = "CREATE DATABASE consultorio_medico";
		mysql_query($sql, $con);
		#echo "Base de datos creada satisfactoriamente<br>";
	}

 ?>

