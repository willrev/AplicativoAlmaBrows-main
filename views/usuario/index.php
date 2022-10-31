<head>

    <link rel="stylesheet" href="../styles/usuario/index.css">

    <title>Tipificador Alma</title>

</head>

<main>

    <section class="section--one">

        <div class="div--title">

            <h1>Tabla Usuarios</h1>

            <a href="usuarioController.php?accion=crearUsuario">+ Añadir Usuario</a>

        </div>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                    <th>Tipo de Usuario</th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php $i = 0; foreach($usuarios as $usuario): ?>

                    <tr>

                        <td><?= $usuario->idUsuario ?></td>
                        <td><?= $usuario->nombreUsuario ?></td>
                        <td><?= $usuario->claveUsuario ?></td>
                        <td>

                            <?php 
                            
                                switch ($usuario->idTipoUsuario) {
                                    
                                    case '1':
                                        echo 'Administrador';
                                        break;

                                    case '2':
                                        echo 'Supervisor';
                                        break;
                                    
                                    case '3':
                                        echo 'Asesor';
                                        break;

                                    default:
                                        echo 'Error';
                                        break;

                                }

                            ?>

                        </td>
                        <td>

                            <a class="button--modify" href="usuarioController.php?accion=modificarUsuario&idUsuario=<?=$usuario->idUsuario?>">Modificar</a>
                            
                        </td>
                        <td>

                            <a class="button--delete" href="usuarioController.php?accion=eliminarUsuario&idUsuario=<?=$usuario->idUsuario?>">Eliminar</a>
                            

                        </td>
                        
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>