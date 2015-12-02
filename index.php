<?php include("config.php"); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Consultorio M&eacute;dico</title>
        <?php include("metas.php"); ?>
    </head>
    <body>
        <?php include("header.php");?>
        <div class="main">
            <?php
            switch ($_GET['a'])
            {
            case 'Inicio':
                include 'acerca.php';
                include 'access.php';
                include 'servicios.php';
                #include 'features.php';
                #include 'work.php';
                #include 'skills.php';
                #include 'equipo.php';
             break;
            case 'Consultas':
                header("Location:".$PATH."consultas.php");
        break;
            }
        ?>
        </div>    
        <?php include("footer.php");?>
        <?php include("scripts.php");?>
    </body>
</html>		