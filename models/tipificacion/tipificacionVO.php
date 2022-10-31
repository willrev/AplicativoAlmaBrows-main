<?php

    class Tipificacion{

        private int $idTipificacion;
        private string 
        
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
            $textarea,
            $recordatorio
        
        ;

        public function __construct($arrayTipificacion)
        {
            
            if(count($arrayTipificacion)==24){

                $this->nombreUsuario = $arrayTipificacion["nombreUsuario"];
                $this->fechaGestion = $arrayTipificacion["fechaGestion"];
                $this->fechaFinGestion = $arrayTipificacion["fechaFinGestion"];
                $this->embudoOrigen = $arrayTipificacion["embudoOrigen"];
                $this->tipoOT = $arrayTipificacion["tipoOT"];
                $this->redSocial = $arrayTipificacion["redSocial"];
                $this->nombreCliente = $arrayTipificacion["nombreCliente"];
                $this->telefonoCliente = $arrayTipificacion["telefonoCliente"];
                $this->estadoTipificacion = $arrayTipificacion["estadoTipificacion"];
                $this->agendaIncumplida = $arrayTipificacion["agendaIncumplida"];
                $this->cancelaCita = $arrayTipificacion["cancelaCita"];
                $this->noInteresado = $arrayTipificacion["noInteresado"];
                $this->exito = $arrayTipificacion["exito"];
                $this->fechaCheckCalidad = $arrayTipificacion["fechaCheckCalidad"];
                $this->costoModelo = $arrayTipificacion["costoModelo"];
                $this->fechaPagoModelo = $arrayTipificacion["fechaPagoModelo"];
                $this->fechaMantenimientoGratis = $arrayTipificacion["fechaMantenimientoGratis"];
                $this->fechaValoracionGratis = $arrayTipificacion["fechaValoracionGratis"];
                $this->fechaValoracionPresencial = $arrayTipificacion["fechaValoracionPresencial"];
                $this->fechaValoracionVirtual = $arrayTipificacion["fechaValoracionVirtual"];
                $this->fechaVolverALlamar = $arrayTipificacion["fechaVolverALlamar"];
                $this->fechaVolverALlamarInteresado = $arrayTipificacion["fechaVolverALlamarInteresado"];
                $this->observaciones = $arrayTipificacion["observaciones"];
                //$this->observaciones = $arrayTipificacion["textarea"];
                $this->recordatorio = $arrayTipificacion["recordatorio"];

            }
            elseif(count($arrayTipificacion)==25){

                $this->idTipificacion = $arrayTipificacion["idTipificacion"];
                $this->nombreUsuario = $arrayTipificacion["nombreUsuario"];
                $this->fechaGestion = $arrayTipificacion["fechaGestion"];
                $this->fechaFinGestion = $arrayTipificacion["fechaFinGestion"];
                $this->embudoOrigen = $arrayTipificacion["embudoOrigen"];
                $this->tipoOT = $arrayTipificacion["tipoOT"];
                $this->redSocial = $arrayTipificacion["redSocial"];
                $this->nombreCliente = $arrayTipificacion["nombreCliente"];
                $this->telefonoCliente = $arrayTipificacion["telefonoCliente"];
                $this->estadoTipificacion = $arrayTipificacion["estadoTipificacion"];
                $this->agendaIncumplida = $arrayTipificacion["agendaIncumplida"];
                $this->cancelaCita = $arrayTipificacion["cancelaCita"];
                $this->noInteresado = $arrayTipificacion["noInteresado"];
                $this->exito = $arrayTipificacion["exito"];
                $this->fechaCheckCalidad = $arrayTipificacion["fechaCheckCalidad"];
                $this->costoModelo = $arrayTipificacion["costoModelo"];
                $this->fechaPagoModelo = $arrayTipificacion["fechaPagoModelo"];
                $this->fechaMantenimientoGratis = $arrayTipificacion["fechaMantenimientoGratis"];
                $this->fechaValoracionGratis = $arrayTipificacion["fechaValoracionGratis"];
                $this->fechaValoracionPresencial = $arrayTipificacion["fechaValoracionPresencial"];
                $this->fechaValoracionVirtual = $arrayTipificacion["fechaValoracionVirtual"];
                $this->fechaVolverALlamar = $arrayTipificacion["fechaVolverALlamar"];
                $this->fechaVolverALlamarInteresado = $arrayTipificacion["fechaVolverALlamarInteresado"];
                $this->observaciones = $arrayTipificacion["observaciones"];
                //$this->observaciones = $arrayTipificacion["textarea"];
                $this->recordatorio = $arrayTipificacion["recordatorio"];

            }

        }

        /**
         * Get the value of idTipificacion
         */
        public function getIdTipificacion()
        {
            return $this->idTipificacion;
        }

        /**
         * Set the value of idTipificacion
         *
         * @return  self
         */
        public function setIdTipificacion($idTipificacion)
        {
            $this->idTipificacion = $idTipificacion;

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
         * Get the value of fechaGestion
         */
        public function getFechaGestion()
        {
            return $this->fechaGestion;
        }

        /**
         * Set the value of fechaGestion
         *
         * @return  self
         */
        public function setFechaGestion($fechaGestion)
        {
            $this->fechaGestion = $fechaGestion;

            return $this;
        }

        /**
         * Get the value of fechaFinGestion
         */
        public function getFechaFinGestion()
        {
            return $this->fechaFinGestion;
        }

        /**
         * Set the value of fechaFinGestion
         *
         * @return  self
         */
        public function setFechaFinGestion($fechaFinGestion)
        {
            $this->fechaFinGestion = $fechaFinGestion;

            return $this;
        }

        /**
         * Get the value of embudoOrigen
         */
        public function getEmbudoOrigen()
        {
            return $this->embudoOrigen;
        }

        /**
         * Set the value of embudoOrigen
         *
         * @return  self
         */
        public function setEmbudoOrigen($embudoOrigen)
        {
            $this->embudoOrigen = $embudoOrigen;

            return $this;
        }

        /**
         * Get the value of tipoOT
         */ 
        public function getTipoOT()
        {
            return $this->tipoOT;
        }

        /**
         * Set the value of tipoOT
         *
         * @return  self
         */ 
        public function setTipoOT($tipoOT)
        {
            $this->tipoOT = $tipoOT;

            return $this;
        }

        /**
         * Get the value of redSocial
         */
        public function getRedSocial()
        {
            return $this->redSocial;
        }

        /**
         * Set the value of redSocial
         *
         * @return  self
         */
        public function setRedSocial($redSocial)
        {
            $this->redSocial = $redSocial;

            return $this;
        }

        /**
         * Get the value of nombreCliente
         */
        public function getNombreCliente()
        {
            return $this->nombreCliente;
        }

        /**
         * Set the value of nombreCliente
         *
         * @return  self
         */
        public function setNombreCliente($nombreCliente)
        {
            $this->nombreCliente = $nombreCliente;

            return $this;
        }

        /**
         * Get the value of telefonoCliente
         */
        public function getTelefonoCliente()
        {
            return $this->telefonoCliente;
        }

        /**
         * Set the value of telefonoCliente
         *
         * @return  self
         */
        public function setTelefonoCliente($telefonoCliente)
        {
            $this->telefonoCliente = $telefonoCliente;

            return $this;
        }

        /**
         * Get the value of estadoTipificacion
         */
        public function getEstadoTipificacion()
        {
            return $this->estadoTipificacion;
        }

        /**
         * Set the value of estadoTipificacion
         *
         * @return  self
         */
        public function setEstadoTipificacion($estadoTipificacion)
        {
            $this->estadoTipificacion = $estadoTipificacion;

            return $this;
        }

        /**
         * Get the value of agendaIncumplida
         */
        public function getAgendaIncumplida()
        {
            return $this->agendaIncumplida;
        }

        /**
         * Set the value of agendaIncumplida
         *
         * @return  self
         */
        public function setAgendaIncumplida($agendaIncumplida)
        {
            $this->agendaIncumplida = $agendaIncumplida;

            return $this;
        }

        /**
         * Get the value of cancelaCita
         */
        public function getCancelaCita()
        {
            return $this->cancelaCita;
        }

        /**
         * Set the value of cancelaCita
         *
         * @return  self
         */
        public function setCancelaCita($cancelaCita)
        {
            $this->cancelaCita = $cancelaCita;

            return $this;
        }

        /**
         * Get the value of noInteresado
         */
        public function getNoInteresado()
        {
            return $this->noInteresado;
        }

        /**
         * Set the value of noInteresado
         *
         * @return  self
         */
        public function setNoInteresado($noInteresado)
        {
            $this->noInteresado = $noInteresado;

            return $this;
        }

        /**
         * Get the value of exito
         */ 
        public function getExito()
        {
            return $this->exito;
        }

        /**
         * Set the value of exito
         *
         * @return  self
         */ 
        public function setExito($exito)
        {
            $this->exito = $exito;

            return $this;
        }

        /**
         * Get the value of fechaCheckCalidad
         */
        public function getFechaCheckCalidad()
        {
            return $this->fechaCheckCalidad;
        }

        /**
         * Set the value of fechaCheckCalidad
         *
         * @return  self
         */
        public function setFechaCheckCalidad($fechaCheckCalidad)
        {
            $this->fechaCheckCalidad = $fechaCheckCalidad;

            return $this;
        }

        /**
         * Get the value of costoModelo
         */ 
        public function getCostoModelo()
        {
            return $this->costoModelo;
        }

        /**
         * Set the value of costoModelo
         *
         * @return  self
         */ 
        public function setCostoModelo($costoModelo)
        {
            $this->costoModelo = $costoModelo;

            return $this;
        }

        /**
         * Get the value of fechaPagoModelo
         */
        public function getFechaPagoModelo()
        {
            return $this->fechaPagoModelo;
        }

        /**
         * Set the value of fechaPagoModelo
         *
         * @return  self
         */
        public function setFechaPagoModelo($fechaPagoModelo)
        {
            $this->fechaPagoModelo = $fechaPagoModelo;

            return $this;
        }

        /**
         * Get the value of fechaMantenimientoGratis
         */
        public function getFechaMantenimientoGratis()
        {
            return $this->fechaMantenimientoGratis;
        }

        /**
         * Set the value of fechaMantenimientoGratis
         *
         * @return  self
         */
        public function setFechaMantenimientoGratis($fechaMantenimientoGratis)
        {
            $this->fechaMantenimientoGratis = $fechaMantenimientoGratis;

            return $this;
        }

        /**
         * Get the value of fechaValoracionGratis
         */
        public function getFechaValoracionGratis()
        {
            return $this->fechaValoracionGratis;
        }

        /**
         * Set the value of fechaValoracionGratis
         *
         * @return  self
         */
        public function setFechaValoracionGratis($fechaValoracionGratis)
        {
            $this->fechaValoracionGratis = $fechaValoracionGratis;

            return $this;
        }

        /**
         * Get the value of fechaValoracionPresencial
         */
        public function getFechaValoracionPresencial()
        {
            return $this->fechaValoracionPresencial;
        }

        /**
         * Set the value of fechaValoracionPresencial
         *
         * @return  self
         */
        public function setFechaValoracionPresencial($fechaValoracionPresencial)
        {
            $this->fechaValoracionPresencial = $fechaValoracionPresencial;

            return $this;
        }

        /**
         * Get the value of fechaValoracionVirtual
         */
        public function getFechaValoracionVirtual()
        {
            return $this->fechaValoracionVirtual;
        }

        /**
         * Set the value of fechaValoracionVirtual
         *
         * @return  self
         */
        public function setFechaValoracionVirtual($fechaValoracionVirtual)
        {
            $this->fechaValoracionVirtual = $fechaValoracionVirtual;

            return $this;
        }

        /**
         * Get the value of fechaVolverALlamar
         */
        public function getFechaVolverALlamar()
        {
            return $this->fechaVolverALlamar;
        }

        /**
         * Set the value of fechaVolverALlamar
         *
         * @return  self
         */
        public function setFechaVolverALlamar($fechaVolverALlamar)
        {
            $this->fechaVolverALlamar = $fechaVolverALlamar;

            return $this;
        }

        /**
         * Get the value of fechaVolverALlamarInteresado
         */
        public function getFechaVolverALlamarInteresado()
        {
            return $this->fechaVolverALlamarInteresado;
        }

        /**
         * Set the value of fechaVolverALlamarInteresado
         *
         * @return  self
         */
        public function setFechaVolverALlamarInteresado($fechaVolverALlamarInteresado)
        {
            $this->fechaVolverALlamarInteresado = $fechaVolverALlamarInteresado;

            return $this;
        }

        /**
         * Get the value of observaciones
         */
        public function getObservaciones()
        {
            return $this->observaciones;
        }

        /**
         * Set the value of observaciones
         *
         * @return  self
         */
        public function setObservaciones($observaciones)
        {
            $this->observaciones = $observaciones;

            return $this;
        }
        

           /**
         * Get the value of textarea
         */
        public function getTextarea()
        {
            return $this->textarea;
        }

        /**
         * Set the value of textarea
         *
         * @return  self
         */
        public function setTextarea($textarea)
        {
            $this->textarea = $textarea;

            return $this;
        }




        /**
         * Get the value of recordatorio
         */ 
        public function getRecordatorio()
        {
            return $this->recordatorio;
        }

        /**
         * Set the value of recordatorio
         *
         * @return  self
         */ 
        public function setRecordatorio($recordatorio)
        {
            $this->recordatorio = $recordatorio;

            return $this;
        }
    
    }

?>