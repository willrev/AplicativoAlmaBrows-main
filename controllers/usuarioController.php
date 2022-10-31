<?php

    date_default_timezone_set("Europe/Madrid");

    session_start();

    require('../models/usuario/usuarioDAO.php');

    require('../views/templates/header.php');

    $usuarioDao = new UsuarioDao();

    if(!isset($_SESSION['nombreUsuario']) || $_SESSION['idTipoUsuario'] != 1){

        header("Location: loginController.php");

    }else{

        if(!isset($_GET['accion'])&&!isset($_POST['accion'])){

            $usuarios = $usuarioDao->listarUsuarios();
            
            require('../views/usuario/index.php');

        }else{

            if(!isset($_POST['accion'])){

                $accion = $_GET['accion'];

                switch ($accion) {
                
                    case 'crearUsuario':
    
                        $roles = $usuarioDao->listarTiposUsuario();
            
                        require('../views/usuario/create.php');
    
                    break;
    
                    case 'modificarUsuario':
    
                        $idUsuario = $_GET['idUsuario'];
            
                        $usuarios = $usuarioDao->mostrarUsuario($idUsuario);
                        $roles = $usuarioDao->listarTiposUsuario();
                
                        require('../views/usuario/modify.php');
    
                    break;

                    case 'eliminarUsuario':
    
                        $idUsuario = $_GET['idUsuario'];
            
                        $usuarioDao->borrarUsuario($idUsuario);
                
                        $usuarios = $usuarioDao->listarUsuarios();
                        
                        require("../views/usuario/index.php");
    
                    break;
    
                }

            }else{

                $accion = $_POST['accion'];

                switch ($accion) {
    
                    case 'insertarUsuario':
    
                        $arrayUsuario = array(
            
                            "nombreUsuario" => $_POST["nombreUsuario"],
                            "claveUsuario" => $_POST["claveUsuario"],
                            "idTipoUsuario" => $_POST["idTipoUsuario"]
                
                        );
                
                        $usuario = new Usuario($arrayUsuario);
                
                        $usuarioDao->insertarUsuario($usuario);
                        $usuarios = $usuarioDao->listarUsuarios();
                
                        require('../views/usuario/index.php');
    
                    break;

                    case 'actualizarUsuario':
    
                        $arrayUsuario = array(
            
                            "idUsuario" => $_POST["idUsuario"],
                            "nombreUsuario" => $_POST["nombreUsuario"],
                            "claveUsuario" => $_POST["claveUsuario"],
                            "idTipoUsuario" => $_POST["idTipoUsuario"]
                    
                        );
                
                        $usuario = new Usuario($arrayUsuario);
                
                        $usuarioDao->actualizarUsuario($usuario);
                        $usuarios = $usuarioDao->listarUsuarios();
                        
                        require("../views/usuario/index.php");  
    
                    break;
    
                }

            }

        }

    }

    require('../views/templates/footer.php');

?>