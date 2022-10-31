<?php

    class Usuario{

        private int $idUsuario, $idTipoUsuario;
        private string $nombreUsuario, $claveUsuario;

        public function __construct($arrayUsuario)
        {
            
            if(count($arrayUsuario)==3){

                $this->nombreUsuario = $arrayUsuario["nombreUsuario"];
                $this->claveUsuario = $arrayUsuario["claveUsuario"];
                $this->idTipoUsuario = $arrayUsuario["idTipoUsuario"];

            }
            elseif(count($arrayUsuario)==4){

                $this->idUsuario = $arrayUsuario["idUsuario"];
                $this->nombreUsuario = $arrayUsuario["nombreUsuario"];
                $this->claveUsuario = $arrayUsuario["claveUsuario"];
                $this->idTipoUsuario = $arrayUsuario["idTipoUsuario"];

            }

        }        
        
        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of nombreUsuario
         */ 
        public function getNombreUsuario()
        {
                return $this->nombreUsuario;
        }

        /**
         * Set the value of nombreUsuario
         *
         * @return  self
         */ 
        public function setNombreUsuario($nombreUsuario)
        {
                $this->nombreUsuario = $nombreUsuario;

                return $this;
        }

        /**
         * Get the value of claveUsuario
         */ 
        public function getClaveUsuario()
        {
                return $this->claveUsuario;
        }

        /**
         * Set the value of claveUsuario
         *
         * @return  self
         */ 
        public function setClaveUsuario($claveUsuario)
        {
                $this->claveUsuario = $claveUsuario;

                return $this;
        }

        /**
         * Get the value of idTipoUsuario
         */ 
        public function getIdTipoUsuario()
        {
                return $this->idTipoUsuario;
        }

        /**
         * Set the value of idTipoUsuario
         *
         * @return  self
         */ 
        public function setIdTipoUsuario($idTipoUsuario)
        {
                $this->idTipoUsuario = $idTipoUsuario;

                return $this;
        }

    }

?>