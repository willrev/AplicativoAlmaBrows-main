<head>

    <link rel="stylesheet" href="../styles/usuario/create.css">

</head>

<main>

    <section class="section--one">    

        <h1>Usuario</h1>

        <form action="usuarioController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizarUsuario" hidden>

            <?php foreach($usuarios as $usuario) : ?>

                <div class="div--form">

                    <p class="div--form">ID Usuario:</p>
                    <p><?=$usuario->idUsuario?></p>
                    <input type="text" name="idUsuario" id="idUsuario" value="<?=$usuario->idUsuario?>" hidden>

                </div>

                <div class="div--form">

                    
                    <p>Modificar Nombre:</p>
                    <input type="text" name="nombreUsuario" id="nombreUsuario" value="<?=$usuario->nombreUsuario?>">

                </div>

                <div class="div--form">

                    <p>Contraseña:</p>
                    <p><?=$usuario->claveUsuario?></p>
                    <input type="text" id="claveUsuario" name="claveUsuario" value="<?=$usuario->claveUsuario?>" hidden>
                    
                </div>

                <div class="div--form">

                    <p>Tipo de Usuario:</p>
                    <p>
                    <?php
                    
                        foreach($roles as $rol){

                                if($rol->idTipoUsuario == $usuario->idTipoUsuario){

                                echo $rol->nombreTipoUsuario;

                            }

                            }
                    
                        ?>

                    </p>

                </div>

                <div class="div--form">
                    <p>Modificar Tipo de Usuario:</p>
                    <select name="idTipoUsuario" id="idTipoUsuario">

                        <?php foreach($roles as $rol): ?>

                            <option <?php if($rol->idTipoUsuario==$usuario->idTipoUsuario){echo "selected";}?> value="<?=$rol->idTipoUsuario?>"><?php echo $rol->nombreTipoUsuario?></option>

                        <?php endforeach;?>

                    </select>                    
                </div>

                <div class="div--form">

                    <button type="submit">Modificar Usuario</button>

                        <?php endforeach; ?>

                    </div>
        </form>

        <a href="usuarioController.php">Volver</a>

    </section>

</main>

