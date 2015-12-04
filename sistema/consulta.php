<?php 
	include 'conexion.php';

	#Funcion que permite realizar la consulta de la tabla pacientes
	function consultaPacientes()
	{
		#creamos una variable vacía para poder imprimir posteriormente la tabla
		$salida = '';
		#realizamos la consulta directamente de la base de datos y se almacena en una variable
		$consulta = "SELECT * FROM pacientes";
		#ejecutamos la query
		$result = mysql_query($consulta);
		#verificamos que el numero de registros o de filas sea diferente de 0 
		if(mysql_num_rows($result) != 0)
		{
			#mientras sea todo diferente de 0 se crea un arreglo con todos los datos de la consulta y se almacena
			#en una variable llamada $listado
			while($listado = mysql_fetch_assoc($result))
			{
				#se llama a la variable salida y se imprime la tabla
				$salida.= '
					<tr>
						<td>'.$listado['id_paciente'].'</td>
						<td>'.$listado['nombre'].'</td>
						<td>'.$listado['edad'].'</td>
						<td>'.$listado['domicilio'].'</td>
					</tr>
				';
			}
		}
		else 
		{
			#si no hay registros se imprime que no hay ningun registro en la base
			$salida = '
				<tr>
					<td colspan="5" class="center-txt">No hay registros en la base de datos</td>
				</tr>
			';
		}

		return $salida;
	}
 ?>