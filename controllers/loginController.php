

<link rel="shortcut icon" href="../assets/images/logoArcos.png" type="image/x-icon">
<link rel="shortcut icon" href="assets/images/logoArcos.png" type="image/x-icon">

<?php

    date_default_timezone_set("Europe/Madrid");

    session_start();

    require('../models/usuario/usuarioDAO.php');

    $usuarioDao = new UsuarioDao();

    //Validamos si el Usuario Inicio Sesión

    if(!isset($_SESSION['nombreUsuario'])){

        //El usuario NO Inicio Sesión

        if(!isset($_POST['accion']) || $_POST['accion']!="logear"){

            require("../views/login/login.php");

        }else{

            $nombreUsuario = $_POST['nombreUsuario'];
            $claveUsuario = $_POST['claveUsuario'];

            $usuario = $usuarioDao->validarUsuario($nombreUsuario,$claveUsuario);

            if($usuario != null){

                foreach ($usuario as $usuario){

                    $_SESSION["nombreUsuario"] = $usuario->nombreUsuario;
                    $_SESSION["idTipoUsuario"] = $usuario->idTipoUsuario;
                    $_SESSION["idUsuario"] = $usuario->idUsuario;

                    header("Location: ../index.php");
                    
                };

            }else{

                require("../views/login/login.php");

            }

        }

    }else{

        //El usuario Inicio Sesión

        if(!isset($_GET['accion']) || $_GET['accion']!="deslogear"){

            header("Location: ../index.php");
            
        }else{

            session_unset();
            session_destroy();

            require("../views/login/login.php");

        }

    }

    require('../views/templates/header.php');
    

?>