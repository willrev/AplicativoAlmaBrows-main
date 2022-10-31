<head>

    <link rel="stylesheet" href="../styles/tipificacion/index.css">

    <title>Tipificador Alma</title>

</head>

<main>

    <section class="section--one">

        <div class="div--title">

            <h1>Recordatorios</h1>

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
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($tipificaciones as $tipificacion): ?>

                    <?php if($tipificacion->recordatorio == 'on'){ ?>

                        <tr>

                            <td><?= $tipificacion->idTipificacion ?></td>
                            <td><?= $tipificacion->nombreUsuario ?></td>
                            <td><?= $tipificacion->fechaGestion ?></td>
                            <td><?= $tipificacion->nombreCliente ?></td>
                            <td><?= $tipificacion->telefonoCliente ?></td>
                            <td><?= $tipificacion->estadoTipificacion ?></td>
                            <td>

                                <a class="button--modify" href="tipificacionController.php?accion=verRecordatorio&idTipificacion=<?=$tipificacion->idTipificacion?>&telefonoCliente=<?=$tipificacion->telefonoCliente?>">Ver en Detalle</a>
                                
                            </td>
                            <td>

                                <a class="button--delete" href="tipificacionController.php?accion=eliminarRecordatorio&idTipificacion=<?=$tipificacion->idTipificacion?>&telefonoCliente=<?=$tipificacion->telefonoCliente?>">Eliminar</a>
                                
                            </td>
                            
                        </tr>

                    <?php }

                endforeach; ?>

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