<?php include 'conexion.php';?>
<?php 
	if(isset($_POST['nomb']) && isset($_POST['edad']) && isset($_POST['domic']) != "")
	{	

			$nombre = $_POST['nomb'];
			$edad = $_POST['edad'];
			$domic= $_POST['domic'];


			$insert = sprintf("INSERT INTO pacientes(nombre , edad, domicilio) VALUES('".$nombre."', '".$edad."', '".$domic."')");
			$resultado = mysql_query($insert) or die (mysql_error());

			include('satisfactorio.php');
	}
	else
	{
			include('incompleto.php');
	}
 ?>