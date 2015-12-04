<?php include('sistema/consulta.php'); ?>
<?php 
    $consultaPacientes = consultaPacientes();

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Consultorio Médico-Sistema</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
    <body class="body-bk">
        <div class="wrapper">
            <section id="content">
                <header>
                    <h1>Consulta de Pacientes</h1>
                </header>
                <div id="listaPacientes" class="ancho centrarDiv">
                    <table id="list table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Domicilio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                echo $consultaPacientes;
                             ?>
                        </tbody>
                    </table>
                    <fieldset>
                        <input type="hidden" id="accion" name="accion">
                    </fieldset>
                    <button class="btn btn-default" id="btn-consulta">
                        Consultar
                    </button>                    
                </div>   
            </section>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
