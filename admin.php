<!-- 

	FORMULARIO QUE SIRVE PARA DAR DE ALTA PACIENTES

-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de Administración</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form method="POST" action="sistema/insertar.php">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h3>Administacion de pacientes</h3>
								<div class="form-group">
									<input class="form-control" name="nomb" type="text" placeholder="Ingresa Nombre" required>
								</div>
								<div class="form-group">
									<input class="form-control" name="edad" type="text" placeholder="Ingresa edad" required>
								</div>
								<div class="form-group">
									<input class="form-control" name="domic" type="text" placeholder="Ingresa domicilio" required>
								</div>
								<div class="form-group">
									<input class="btn btn-default" type="submit" value="Registrar">
								</div>
							</div>
						</div>
					</div>
					</form>			
				</div>
			</div>
		</div>
	</div>
</body>
</html>