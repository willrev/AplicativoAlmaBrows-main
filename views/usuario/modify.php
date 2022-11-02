<head>

    <link rel="stylesheet" href="../styles/usuario/create.css">

</head>

<main>

    <section class="section--one">          

        <h1>Usuario</h1>
        
        <section class="section--one">

        <form action="usuarioController.php" method="POST">
        

            <input type="text" name="accion" id="accion" value="actualizarUsuario" hidden>

            <?php foreach($usuarios as $usuario) : ?>

                <div class="div--form">
                    <label for="idUsuario">ID Usuario:</label>
                    <h2><?=$usuario->idUsuario?></h2>
                    <input type="text" name="idUsuario" id="idUsuario" value="<?=$usuario->idUsuario?>" hidden>

                </div>

                <div class="div--form">
                    
                    <label>Modificar Nombre:</label>
                    <input type="text" name="nombreUsuario" id="nombreUsuario" value="<?=$usuario->nombreUsuario?>">

                </div>

                <div class="div--form">

                    <label>Contraseña:</label>
                    <h2><?=$usuario->claveUsuario?></h2>
                    <input type="text" name="claveUsuario"  id="claveUsuario" value="<?=$usuario->claveUsuario?>" hidden>
                    
                </div>

                <div class="div--form">

                    <label>Tipo de Usuario:</label>

                    <h2><?php
                    
                        foreach($roles as $rol){

                                if($rol->idTipoUsuario == $usuario->idTipoUsuario){

                                echo $rol->nombreTipoUsuario;

                            }

                            }
                    
                        ?>

                    </h2> 

                </div>

                <div class="div--form">

                <label for="idTipoUsuario">Modificar Tipo de Usuario:</label>
                    <select name="idTipoUsuario" id="idTipoUsuario">

                        <?php foreach($roles as $rol): ?>

                            <option <?php if($rol->idTipoUsuario==$usuario->idTipoUsuario){echo "selected";}?> value="<?=$rol->idTipoUsuario?>"><?php echo $rol->nombreTipoUsuario?></option>

                        <?php endforeach;?>

                    </select>                    
                </div>

                <div class="div--form">

                    <button type="submit">Modificar Usuario</button>

                        <?php endforeach; ?>

                        <a href="usuarioController.php">Volver</a>

                    </div>
            </form>    

    </section>

</main>

