<?php 
	sleep(2);

	$respuetaOK = false;
	$menajeError = "No se  puede ejecutar la aplicacion";
	$contenedorOk = "";

	include('consulta.php');


	if(isset($_POST) && !empty($_POST))
	{
		switch($_POST['accion'])
		{
			case 'updateUser':
				$query = sprintf("SELECT * FROM pacientes");
				$resultadoQuery = mysql_query($query);

				if($resultadoQuery == true)
				{
					$respuetaOK = true;
					$menajeError = "Se ha actualizado la consulta";


					$contenedorOk = '
						<tr>
							<td>'.$_POST['nombre'].'</td>
							<td>'.$_POST['edad'].'</td>
							<td>'.$_POST['domicilio'].'</td>
						<tr>
					';
				}
				else 
				{
					$menajeError = "No se pudo actualizar";
				}
			break;
			default: 
				$menajeError = "Esta accion no se puede realizar";
			break;	
		}
	}

	$salidaJson = array("respuesta" => $respuestaOK,
						"mensaje" => $mensajeError,
						"contenido" => $contenedorOk);

	echo json_encode($salidaJson);
 ?>	