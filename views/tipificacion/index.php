<head>

    <link rel="stylesheet" href="../styles/tipificacion/index.css">

    <title>Tipificador Alma</title>

</head>

<main>

    <?php if($totalRecordatorios[0]->{'COUNT(tipificacion.idTipificacion)'}>0):?>

        <a href="tipificacionController.php?accion=verRecordatorios">

            <div class="div--alertaRecordatorios">

                <p>Tienes Recordatorios Pendientes</p>

            </div>

        </a>

    <?php endif; ?>

    <section class="section--one">

        <div class="div--title">

            <h1>Tipificaciones</h1>

            <div class="div--buttons">

                <a href="tipificacionController.php?accion=crearTipificacion">+ Añadir Tipificacion</a>

                <form action="tipificacionController.php" method="GET">

                    <input type="text" name="search" id="search">

                    <button type="submit">Buscar</button>
                
                </form>

            </div>

        </div>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Asesor</th>
                    <th>Fecha de Gestión</th>
                    <th>Nombre Cliente</th>
                    <th>Teléfono Cliente</th>
                    <th>Estado Tipificación</th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($tipificaciones as $tipificacion): ?>

                    <tr>

                        <td><?= $tipificacion->idTipificacion ?></td>
                        <td><?= $tipificacion->nombreUsuario ?></td>
                        <td><?= $tipificacion->fechaGestion ?></td>
                        <td><?= $tipificacion->nombreCliente ?></td>
                        <td><?= $tipificacion->telefonoCliente ?></td>
                        <td><?= $tipificacion->estadoTipificacion ?></td>
                        <td>

                            <a class="button--modify" href="tipificacionController.php?accion=modificarTipificacion&idTipificacion=<?=$tipificacion->idTipificacion?>&telefonoCliente=<?=$tipificacion->telefonoCliente?>">Modificar</a>
                            
                        </td>
                        <td>

                            <a class="button--modify" href="tipificacionController.php?accion=eliminarTipificacion&idTipificacion=<?=$tipificacion->idTipificacion?>&telefonoCliente=<?=$tipificacion->telefonoCliente?>">Eliminar</a>
                            
                        </td>
                        <td>

                            <a class="button--modify" href="#">P.RamaGit.</a>
                            
                        </td>
                        
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

        <div class="div--pagination">

            <?php

                $paginacionFinal = $paginacion[0]->{'COUNT(*)'};

                $registersPerPage2 = 10;

                $numberOfPages = ceil($paginacionFinal/$registersPerPage2);

                for ($i=1; $i <= $numberOfPages ; $i++) { 
                    
                    if($i<=25){

                        ?>
                        
                            <a href="tipificacionController.php?page=<?=$i?>"><?=$i?></a>

                        <?php

                    }

                }

                

            ?>

        </div>

    </section>

</main>