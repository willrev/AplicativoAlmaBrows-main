<?php

    require('../controllers/db.php');
    require('usuarioVO.php');

    class UsuarioDao{

        public function listarUsuarios(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM usuario;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                echo $preparedStatement;

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function mostrarUsuario(int $idUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT idUsuario, nombreUsuario, claveUsuario, idTipoUsuario FROM usuario WHERE idUsuario = ?;");
                $preparedStatement->execute([$idUsuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function insertarUsuario($usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombreUsuario = $usuario->getNombreUsuario();
                $claveUsuario = $usuario->getClaveUsuario();
                $idTipoUsuario = $usuario->getIdTipoUsuario();

                $preparedStatement = $connection->prepare("INSERT INTO usuario (nombreUsuario,claveUsuario,idTipoUsuario) VALUES ( ?,?,? );");
                $preparedStatement->execute([$nombreUsuario,$claveUsuario,$idTipoUsuario]);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function actualizarUsuario($usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $idUsuario = $usuario->getIdUsuario();
                $nombreUsuario = $usuario->getNombreUsuario();
                $claveUsuario = $usuario->getClaveUsuario();
                $idTipoUsuario = $usuario->getIdTipoUsuario();

                $preparedStatement = $connection->prepare("UPDATE usuario SET nombreUsuario = ?, claveUsuario = ?, idTipoUsuario = ? WHERE idUsuario = ?;");
                $preparedStatement->execute([$nombreUsuario, $claveUsuario,$idTipoUsuario,$idUsuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function borrarUsuario(int $idUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("DELETE FROM usuario WHERE idUsuario = ?;");
                $preparedStatement->execute([$idUsuario]); 

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function listarTiposUsuario(){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT * FROM tipousuario;");
                $preparedStatement->execute();

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                /* echo $preparedStatement; */

            }catch(Exception $e){

                $e->getMessage();

            }            

        }

        public function validarUsuario($nombreUsuario, $claveUsuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $preparedStatement = $connection->prepare("SELECT idUsuario, nombreUsuario, claveUsuario, idTipoUsuario FROM usuario WHERE nombreUsuario = ? AND claveUsuario = ?;");
                $preparedStatement->execute([$nombreUsuario,$claveUsuario]);

                return $preparedStatement->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){

                $e->getMessage();

            }

        }

        public function revisarDuplicado($usuario){

            try{

                $connector = new DBConnector();
                $connection = $connector->getConnection();

                $nombreUsuario = $usuario->getNombreUsuario();

                $preparedStatement = $connection->prepare("SELECT * FROM usuario WHERE nombreUsuario = ?;");
                $preparedStatement->execute([$nombreUsuario]);
                
                $duplicados = $preparedStatement->fetchAll(PDO::FETCH_OBJ);

                $i = 0;

                foreach($duplicados as $duplicado){

                    $i++;

                }

                return $i;

            }catch(Exception $e){

                $e->getMessage();

            }

        }

    }

?>