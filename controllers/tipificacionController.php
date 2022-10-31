<?php

    ini_set('display_errors',1);
    error_reporting(E_ALL & ~E_NOTICE);

    session_start();

    require('../models/tipificacion/tipificacionDAO.php');

    require('../views/templates/header.php');

    $tipificacionDao = new TipificacionDAO();

    if(!isset($_SESSION['nombreUsuario'])){

        header("Location: loginController.php");

    }else{

        if(!isset($_GET['accion'])&&!isset($_POST['accion'])){

            $tipificaciones = $tipificacionDao->listarTipificaciones();
            $paginacion = $tipificacionDao->calcularPaginacion();
            $totalRecordatorios = $tipificacionDao->comprobarRecordatorios();

            require('../views/tipificacion/index.php');

        }else{

            if(!isset($_POST['accion'])){

                $accion = $_GET['accion'];

                switch ($accion) {
                
                    case 'crearTipificacion':
            
                        require('../views/tipificacion/create.php');
    
                    break;
    
                    case 'modificarTipificacion':
    
                        $idTipificacion = $_GET['idTipificacion'];
                        
                        $telefonoCliente = $_GET['telefonoCliente'];
            
                        $tipificaciones = $tipificacionDao->mostrarTipificacion($idTipificacion,$telefonoCliente);
                
                        require('../views/tipificacion/create.php');
    
                    break;

                    
                    case 'eliminarTipificacion':
    
                        $idTipificacion = $_GET['idTipificacion'];

                        $telefonoCliente = $_GET['telefonoCliente'];
            
                        $tipificaciones = $tipificacionDao->borrarTipificacion($idTipificacion,$telefonoCliente);                        
                
                        require('../views/tipificacion/create.php');                        
    
                    break;                    


                    case 'generarReporte':

                        require("../views/tipificacion/report.php");

                    break;

                    case 'verRecordatorios':

                        $tipificaciones = $tipificacionDao->listarTipificaciones();
                        $paginacion = $tipificacionDao->calcularPaginacion();
                        $totalRecordatorios = $tipificacionDao->comprobarRecordatorios();
            
                        require('../views/tipificacion/recordatorio.php');

                    break;

                    case 'verRecordatorio':

                        $idTipificacion = $_GET['idTipificacion'];

                        $telefonoCliente = $_GET['telefonoCliente'];
            
                        $tipificaciones = $tipificacionDao->mostrarTipificacion($idTipificacion,$telefonoCliente);

                        require('../views/tipificacion/create.php');

                    break;

                    case 'eliminarRecordatorio':

                        $tipificaciones = $tipificacionDao->listarTipificaciones();
                        $paginacion = $tipificacionDao->calcularPaginacion();
                        $totalRecordatorios = $tipificacionDao->comprobarRecordatorios();

                        $tipificacionDao->borrarRecordatorio($_GET['idTipificacion']);
            
                        header("Location: tipificacionController.php?accion=verRecordatorios");

                    break;
    
                }

            }else{

                $accion = $_POST['accion'];

                switch ($accion) {
    
                    case 'insertarTipificacion':

                        if(!isset($_POST["recordatorio"])){

                            $recordatorio = '';

                        }else{

                            $recordatorio = 'on';

                        }

                        $DBconnector = new DBConnector();
                        
                        $connection = $DBconnector->getConnection();

                        date_default_timezone_set("Europe/Madrid");

                        $preparedStatement = $connection->prepare(
                    
                            "INSERT INTO tipificacion (nombreUsuario, fechaGestion, fechaFinGestion, embudoOrigen, tipoOT, redSocial, nombreCliente, telefonoCliente, estadoTipificacion, agendaIncumplida, cancelaCita, noInteresado, exito, fechaCheckCalidad, costoModelo, fechaPagoModelo, fechaMantenimientoGratis, fechaValoracionGratis, fechaValoracionPresencial, fechaValoracionVirtual, fechaVolverALlamar, fechaVolverALlamarInteresado, observaciones, recordatorio) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);"
                        
                        );

                        $preparedStatement->execute([
                
                            $_SESSION["nombreUsuario"],
                            $_POST["fechaGestion"],
                            date("Y-m-d\TH:i:s"),
                            $_POST["embudoOrigen"],
                            $_POST["tipoOT"],
                            $_POST["redSocial"],
                            $_POST["nombreCliente"],
                            $_POST["telefonoCliente"],
                            $_POST["estadoTipificacion"],
                            $_POST["agendaIncumplida"],
                            $_POST["cancelaCita"],
                            $_POST["noInteresado"],
                            $_POST["exito"],
                            $_POST["fechaCheckCalidad"],
                            $_POST["costoModelo"],
                            $_POST["fechaPagoModelo"],
                            $_POST["fechaMantenimientoGratis"],
                            $_POST["fechaValoracionGratis"],
                            $_POST["fechaValoracionPresencial"],
                            $_POST["fechaValoracionVirtual"],
                            $_POST["fechaVolverALlamar"],
                            $_POST["fechaVolverALlamarInteresado"],
                            $_POST["observaciones"],
                            $recordatorio
                        
                        ]);

                        $tipificaciones = $tipificacionDao->listarTipificaciones();

                        $paginacion = $tipificacionDao->calcularPaginacion();
                        
                        $totalRecordatorios = $tipificacionDao->comprobarRecordatorios();

                        require('../views/tipificacion/index.php');
    
                    break;

                }

            }

        }

    }

?>