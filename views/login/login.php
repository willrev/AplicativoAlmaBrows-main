<head>

    <link rel="stylesheet" href="../styles/login/login.css">

    <title>Tipificador Alma</title>

</head>

<main>

    <section class="section--one">

        <div class="logo--big"></div>

        <h1>Inicio de Sesión</h1>

        <form action="loginController.php" method="POST">

            <input type="text" name="accion" value="logear" required hidden>

            <input type="text" name="nombreUsuario" required placeholder="Nombre de Usuario*" focus>

            <input type="password" name="claveUsuario" required placeholder="Contraseña*">

            <button type="submit">Iniciar Sesión</button>

        </form>

        <p>Recuperar Usuario o Contraseña</p>

    </section>

</main>