<?php

    require('../controllers/db.php');
    require('tipificacionVO.php');

    class TipificacionDAO{

        public function listarTipificaciones(){

            try{

                $registersPerPage = "10";
                $page = "";

                if (isset($_GET["page"])) {

                    $page = $_GET["page"];

                } else {

                    $page = 1;

                }

                $startFrom = ($page - 1) * $registersPerPage;

                if(isset($_GET["search"]) && $_GET["search"] != ""){

                    $sqlQuery = "WHERE nombreCliente LIKE '%". $_GET['search'] ."%' OR telefonoCliente LIKE '%".$_GET['search']."%' OR fechaGestion LIKE '%".$_GET['search']."%'  OR estadoTipificacion LIKE '%".$_GET['search']."%' ORDER BY idTipificacion DESC LIMIT $startFrom, $registersPerPage";

                }else{

                    $sqlQuery = "ORDER BY idTipificacion DESC LIMIT $startFrom, $registersPerPage";

                }

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM tipificacion ".$sqlQuery.";");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function calcularPaginacion(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT COUNT(*) FROM tipificacion;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }   

        }

        public function mostrarTipificacion(int $idTipificacion, string $telefonoCliente){

           
            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare(
                    
                    "SELECT * FROM tipificacion WHERE idTipificacion = ? AND telefonoCliente = ?;"
                
                );

                $preparedStatement->execute([$idTipificacion,$telefonoCliente]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();
            }

        }

        /* public function insertarTipificacion($tipificacion){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();
                $nombreUsuario = $tipificacion->getNombreUsuario();
                $fechaGestion = $tipificacion->getFechaGestion();
                $fechaFinGestion = $tipificacion->getFechaFinGestion();
                $embudoOrigen = $tipificacion->getEmbudoOrigen();
                $tipoOT = $tipificacion->getTipoOT();
                $redSocial = $tipificacion->getRedSocial();
                $nombreCliente = $tipificacion->getNombreCliente();
                $telefonoCliente = $tipificacion->getTelefonoCliente();
                $estadoTipificacion = $tipificacion->getEstadoTipificacion();
                $agendaIncumplida = $tipificacion->getAgendaIncumplida();
                $cancelaCita = $tipificacion->getCancelaCita();
                $noInteresado = $tipificacion->getNoInteresado();
                $exito = $tipificacion->getExito();
                $fechaCheckCalidad = $tipificacion->getFechaCheckCalidad();
                $costoModelo = $tipificacion->costoModelo();
                $fechaPagoModelo = $tipificacion->getFechaPagoModelo();
                $fechaMantenimientoGratis = $tipificacion->getFechaMantenimientoGratis();
                $fechaValoracionGratis = $tipificacion->getFechaValoracionGratis();
                $fechaValoracionPresencial = $tipificacion->getFechaValoracionPresencial();
                $fechaValoracionVirtual = $tipificacion->getFechaValoracionVirtual();
                $fechaVolverALlamar = $tipificacion->getFechaVolverALlamar();
                $fechaVolverALlamarInteresado = $tipificacion->getFechaVolverALlamarInteresado();
                $observaciones = $tipificacion->getObservaciones();
                $recordatorio = $tipificacion->getRecordatorio();

                $preparedStatement = $connection->prepare(
                    
                    "INSERT INTO tipificacion (nombreUsuario, fechaGestion, fechaFinGestion, embudoOrigen, tipoOT, redSocial, nombreCliente, telefonoCliente, estadoTipificacion, agendaIncumplida, cancelaCita, noInteresado, exito, fechaCheckCalidad, costoModelo, fechaPagoModelo, fechaMantenimientoGratis, fechaValoracionGratis, fechaValoracionPresencial, fechaValoracionVirtual, fechaVolverALlamar, fechaVolverALlamarInteresado, observaciones, recordatorio) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);"
                
                );
                $preparedStatement->execute([
                
                    $nombreUsuario,
                    $fechaGestion,
                    $fechaFinGestion,
                    $embudoOrigen,
                    $tipoOT,
                    $redSocial,
                    $nombreCliente,
                    $telefonoCliente,
                    $estadoTipificacion,
                    $agendaIncumplida,
                    $cancelaCita,
                    $noInteresado,
                    $exito,
                    $fechaCheckCalidad,
                    $costoModelo,
                    $fechaPagoModelo,
                    $fechaMantenimientoGratis,
                    $fechaValoracionGratis,
                    $fechaValoracionPresencial,
                    $fechaValoracionVirtual,
                    $fechaVolverALlamar,
                    $fechaVolverALlamarInteresado,
                    $observaciones,
                    $recordatorio
                
                ]);

            }catch(Exception $e){

                $e->getMessage();

            }

        } */

         public function actualizarTipificacion($tipificacion){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();
                $idTipificacion = $tipificacion->getIdTipificacion();
                $nombreUsuario = $tipificacion->getNombreUsuario();
                $fechaGestion = $tipificacion->getFechaGestion();
                $embudoOrigen = $tipificacion->getEmbudoOrigen();
                $redSocial = $tipificacion->getRedSocial();
                $nombreCliente = $tipificacion->getNombreCliente();
                $telefonoCliente = $tipificacion->getTelefonoCliente();
                $estadoTipificacion = $tipificacion->getEstadoTipificacion();
                $observaciones = $tipificacion->getObservaciones();
                $motivoNoInteres = $tipificacion->getMotivoNoInteres();
                $fechaCheckCalidad = $tipificacion->getFechaCheckCalidad();
                $tipoAgendamiento = $tipificacion->getIipoAgendamiento();
                $fechaAgendamiento = $tipificacion->getFechaAgendamiento();
                $fechaVolverLlamar = $tipificacion->getFechaVolverLlamar();
                $fechaAgendaModelo = $tipificacion->getFechaAgendaModelo();
                $fechaPagoAgendaModelo = $tipificacion->getFechaPagoAgendaModelo();
                $fechaCancelarAgenda = $tipificacion->getFechaCancelarAgenda();
                $motivoCancelaAgenda = $tipificacion->getMotivoCancelaAgenda();
                $fechaAsiste = $tipificacion->getFechaAsiste();

                $preparedStatement = $connection->prepare(
                    
                    "UPDATE tipificacion SET nombreUsuario = ?, fechaGestion  = ?, embudoOrigen = ?, redSocial  = ?, nombreCliente  = ?, telefonoCliente  = ?, estadoTipificacion  = ?, observaciones  = ?, motivoNoInteres  = ?, fechaCheckCalidad  = ?, tipoAgendamiento  = ?, fechaAgendamiento  = ?, fechaVolverLlamar  = ?, fechaAgendaModelo  = ?, fechaPagoAgendaModelo  = ?, fechaCancelarAgenda  = ?, motivoCancelaAgenda  = ?, fechaAsiste = ? WHERE idTipifiacion = ?;"
                
                );
                $preparedStatement->execute([
                    
                    $nombreUsuario,
                    $fechaGestion,
                    $embudoOrigen,
                    $redSocial,
                    $nombreCliente,
                    $telefonoCliente,
                    $estadoTipificacion,
                    $observaciones,
                    $motivoNoInteres,
                    $fechaCheckCalidad,
                    $tipoAgendamiento,
                    $fechaAgendamiento,
                    $fechaVolverLlamar,
                    $fechaAgendaModelo,
                    $fechaPagoAgendaModelo,
                    $fechaCancelarAgenda,
                    $motivoCancelaAgenda,
                    $fechaAsiste,
                    $idTipificacion

                ]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        } 
        
        

        /* Función de prueba para actualizar  tipificación*/

      /*  public function actualizarTipificacion(int $idTipificacion){

            try{

                $connector = new DBConnector();

                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("UPDATE tipificacion WHERE `idTipificacion`= ? ;");

                $preparedStatement->execute([$idTipificacion]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }*/

        public function borrarTipificacion(int $idTipificacion){

            try{

                $connector = new DBConnector();

                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM tipificacion WHERE idTipificacion = ?;");

                $preparedStatement->execute([$idTipificacion]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function comprobarRecordatorios(){

            try{

                $connector = new DBConnector();

                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT COUNT(tipificacion.idTipificacion) FROM tipificacion WHERE tipificacion.recordatorio = 'on';");

                $preparedStatement->execute(); 

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarRecordatorio(int $idTipificacion){

            try{

                $connector = new DBConnector();

                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("UPDATE `tipificacion` SET `recordatorio` = '' WHERE `tipificacion`.`idTipificacion` = ?;");
                
                $preparedStatement->execute([$idTipificacion]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>