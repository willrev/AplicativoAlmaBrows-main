<?php

    require('../controllers/db.php');
    require('tipoUsuarioVO.php');

    class TipoUsuarioDao{

        public function listarTipoUsuario(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM tipoUsuario;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function mostrarTipoUsuario(int $idTipoUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT idTipoUsuario, nombreTipoUsuario FROM tipoUsuario WHERE idTipoUsuario = ?;");
                $preparedStatement->execute([$idTipoUsuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        //TODO: Añadir la función Mostrar ROLES USUARIO

        public function insertarTipoUsuario($tipoUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombre_tusuario = $tipoUsuario->getNombreTipoUsuario();

                $preparedStatement = $connection->prepare("INSERT INTO tipoUsuario (nombreTipoUsuario) VALUES ( ? );");
                $preparedStatement->execute([$nombreTipoUsuario]);   

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarTipoUsuario($tipoUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $id_tusuario = $tipoUsuario->getIdTipoUsuario();
                $nombre_tusuario = $tipoUsuario->getNombreTipoUsuario();

                $preparedStatement = $connection->prepare("UPDATE tipoUsuario SET nombreTipoUsuario = ? WHERE idTipoUsuario = ?;");
                $preparedStatement->execute([$nombreTipoUsuario, $idTipoUsuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarTipoUsuario(int $idTipoUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM tipoUsuario WHERE idTipoUsuario = ?;");
                $preparedStatement->execute([$idTipoUsuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>