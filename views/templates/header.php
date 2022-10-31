<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/generalStyles.css">
    <link rel="stylesheet" href="../styles/generalStyles.css">

    <link rel="stylesheet" href="styles/templates/header.css">
    <link rel="stylesheet" href="../styles/templates/header.css">

    <title>Tipificador Alma Brows</title>

    <link rel="shortcut icon" href="../assets/images/logoArcos.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logoArcos.png" type="image/x-icon">

</head>
<body>

    <script src="/scripts/scripts.js"></script>
    <script src="../scripts/scripts.js"></script>

<?php

    date_default_timezone_set("America/Bogota");

    if(isset($_SESSION['nombreUsuario'])){


        if(
            
            $url = $_SERVER["REQUEST_URI"]=="/tipificadorAlma/" ||
            $url = $_SERVER["REQUEST_URI"]=="/tipificadorAlma/index.php"
        
        ){

            ?>
        
                <div class="navbar--container">

                    <a href="index.php"><div class="navbar--logo"></div></a>

                    <nav class="navbar">

                        <a href="../index.php">Inicio</a>
                        
                        <?php if($_SESSION["idTipoUsuario"]==1):?>

                            <a href="controllers/usuarioController.php">Usuarios</a>

                        <?php endif; ?>

                        <a href="controllers/tipificacionController.php">Tipificaciones</a>

                        <a href="controllers/tipificacionController.php?accion=crearTipificacion">Tipificar</a>

                        <?php if($_SESSION["idTipoUsuario"]==1||$_SESSION["idTipoUsuario"]==2):?>

                            <a href="controllers/tipificacionController.php?accion=generarReporte">Descargar Reportes</a>

                        <?php endif; ?>
                        
                        <a href="controllers/tipificacionController.php?accion=verRecordatorios">Recordatorios</a>

                        <a href="controllers/loginController.php?accion=deslogear">Cerrar Sesión</a>

                    </nav>

                    <div class="navbar--profile"></div>

                    
                </div>
                

            <?php

        }else{

            ?>
                
                <div class="navbar--container">
        
                    <a href="../index.php"><div class="navbar--logo"></div></a>

                    <nav class="navbar">

                        <a href="../index.php">Inicio</a>

                        <?php if($_SESSION["idTipoUsuario"]==1):?>

                            <a href="usuarioController.php">Usuarios</a>

                        <?php endif; ?>

                        <a href="tipificacionController.php">Tipificaciones</a>

                        <a href="tipificacionController.php?accion=crearTipificacion">Tipificar</a>
            
                        <?php if($_SESSION["idTipoUsuario"]==1||$_SESSION["idTipoUsuario"]==2):?>

                            <a href="tipificacionController.php?accion=generarReporte">Descargar Reportes</a>

                        <?php endif; ?>
                        
                        <a href="tipificacionController.php?accion=verRecordatorios">Recordatorios</a>

                        <a href="loginController.php?accion=deslogear">Cerrar Sesión</a>

                    </nav>

                    <div class="navbar--profile"></div>

                </div>

            <?php

        }

    }

?>