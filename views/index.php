<head>

    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="styles/index.css">

</head>

<section class="section--one">

    <h3>ACCIONES</h3>

    <div class="buttons--container">

        <?php if($_SESSION["idTipoUsuario"]==1||$_SESSION["idTipoUsuario"]==2):?>

            <div class="buttons--div">

                <div class="buttons--image image--download"><!-- Imagen --></div>
                <a href="controllers/tipificacionController.php?accion=generarReporte" class="buttons--button">Descargar Reportes</a>

            </div>

        <?php endif; ?>

        <div class="buttons--div">

            <div class="buttons--image image--tipificar"><!-- Imagen --></div>
            <a href="controllers/tipificacionController.php?accion=crearTipificacion" class="buttons--button">Tipificar</a>

        </div>

        <div class="buttons--div">

            <div class="buttons--image image--crudTipificar"><!-- Imagen --></div>
            <a href="controllers/tipificacionController.php" class="buttons--button">Revisar Tipificaciones</a>

        </div>

        <?php if($_SESSION["idTipoUsuario"]==1):?>

            <div class="buttons--div">

                <div class="buttons--image image--crudUsuarios"><!-- Imagen --></div>
                <a href="controllers/usuarioController.php" class="buttons--button">Gestionar Usuarios</a>

            </div>

        <?php endif; ?>

    </div>

</section>