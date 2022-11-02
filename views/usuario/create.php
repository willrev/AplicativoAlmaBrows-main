<head>

    <link rel="stylesheet" href="../styles/usuario/create.css">

</head>

<main>

    <section class="section--one">

        <h1>Añadir Usuario</h1>

        <form action="usuarioController.php" method="POST">          

                <input type="text" id="accion" name="accion" value="insertarUsuario" hidden>

    

            <div class="div--form">

                <label for="nombreUsuario">Nombre:</label>
                <input type="text" name="nombreUsuario" id="nombreUsuario" required>

            </div>

            <div class="div--form">

                <label for="claveUsuario">Contraseña:</label>
                <input type="password" name="claveUsuario" id="claveUsuario" required>

            </div>

            
            <div class="div--form">

                <label for="idTipoUsuario">Tipo de Usuario:</label>
                
                <select name="idTipoUsuario" id="idTipoUsuario">

                    <?php foreach($roles as $rol): ?>

                        <option value="<?=$rol->idTipoUsuario?>"><?php echo $rol->nombreTipoUsuario?></option>

                    <?php endforeach;?>

                </select>

            </div>
            
            <div class="div--form">

                <button type="submit">Crear Usuario</button>

            </div>

        </form>

    </section>

</main>