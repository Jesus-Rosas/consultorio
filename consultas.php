<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Consultorio Médico-Sistema</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    <body class="body-bk">
        <div class="main">
            <header>
                <h1 class="text-center">Bienvenido al Sistema de Consultas Médicas</h1>
            </header>
            <section class="historial">
                <table class="table">
                    <tr class="tbl-header">
                        <td><label>Id Paciente</label></td> 
                        <td><label>Nombre del paciente</label></td>
                        <td><label>Teléfono</label></td>
                        <td><label>Fecha Nacimiento</label></td>
                        <td><label>Municipio</label></td>
                    </tr>
                    <tr>
                        <td><label id="id_paciente">001</label></td>
                        <td><label>Dream Andrea </label> </td>
                        <td><label>722-125-589</label></td>
                        <td><label>10-septiembre-199></label></td>
                        <td><label>Toluca</label></td>
                    </tr>
                </table>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-form">Consultar</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-form">Actualizar</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
