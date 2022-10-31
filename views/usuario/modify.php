<head>

    <title>Código De Policía Ya! | Usuario</title>

</head>

<main>

    <section>

        <h1>Usuario | Usuario</h1>

        <form action="usuarioController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizarUsuario" hidden>

            <?php foreach($usuarios as $usuario) : ?>

                <p>ID Usuario:</p>
                <p><?=$usuario->idUsuario?></p>
                <input type="text" name="idUsuario" id="idUsuario" value="<?=$usuario->idUsuario?>" hidden>

                <p>Nombre:</p>
                <p><?=$usuario->nombreUsuario?></p>
                <p>Modificar Nombre:</p>
                <input type="text" name="nombreUsuario" id="nombreUsuario" value="<?=$usuario->nombreUsuario?>">

                <p>Contraseña:</p>
                <p><?=$usuario->claveUsuario?></p>
                <input type="text" id="claveUsuario" name="claveUsuario" value="<?=$usuario->claveUsuario?>" hidden>

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
                <p>Modificar Tipo de Usuario:</p>
                <select name="idTipoUsuario" id="idTipoUsuario">

                    <?php foreach($roles as $rol): ?>

                        <option <?php if($rol->idTipoUsuario==$usuario->idTipoUsuario){echo "selected";}?> value="<?=$rol->idTipoUsuario?>"><?php echo $rol->nombreTipoUsuario?></option>

                    <?php endforeach;?>

                </select>            

                <button type="submit">Modificar Usuario</button>

            <?php endforeach; ?>

        </form>

        <a href="usuarioController.php">Volver</a>

    </section>

</main>

