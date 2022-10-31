<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
    
    session_start();

    require('views/templates/header.php');

    // Validamos si el usuario Inicio Sesión

    if(!isset($_SESSION['nombreUsuario'])){

        header("Location: controllers/loginController.php");

    }else{

        //Validamos si se realizo una petición especifica al Controlador por medio de Post o de Get

        if(isset($_POST['accion'])){

            $accion = $_POST['accion'];

        }

        if(isset($_GET['accion'])){

            $accion = $_GET['accion'];

        }

        if(!isset($accion)){

            require("views/index.php");

        }

    }

    require('views/templates/footer.php');
    
?>