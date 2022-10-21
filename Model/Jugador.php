<?php
    class Jugador{
        public $id;
        public $nombre;
        public $passwd;
        public $partidas;
        public $ganadas;
        public $perdidas;
        
        function __construct($id, $nombre, $passwd, $partidas, $ganadas, $perdidas){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->passwd = $passwd;
            $this->partidas = $partidas;
            $this->ganadas = $ganadas;
            $this->perdidas = $perdidas;
        }       

//----- GETTERS -----------------------------------
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Get the value of passwd
         */ 
        public function getPasswd()
        {
                return $this->passwd;
        }

        /**
         * Get the value of partidas
         */ 
        public function getPartidas()
        {
                return $this->partidas;
        }

        /**
         * Get the value of ganadas
         */ 
        public function getGanadas()
        {
                return $this->ganadas;
        }

        /**
         * Get the value of perdidas
         */ 
        public function getPerdidas()
        {
                return $this->perdidas;
        }

//----- SETTERS -----------------------------------
        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Set the value of passwd
         *
         * @return  self
         */ 
        public function setPasswd($passwd)
        {
                $this->passwd = $passwd;

                return $this;
        }

        /**
         * Set the value of partidas
         *
         * @return  self
         */ 
        public function setPartidas($partidas)
        {
                $this->partidas = $partidas;

                return $this;
        }

        /**
         * Set the value of ganadas
         *
         * @return  self
         */ 
        public function setGanadas($ganadas)
        {
                $this->ganadas = $ganadas;

                return $this;
        }

        /**
         * Set the value of perdidas
         *
         * @return  self
         */ 
        public function setPerdidas($perdidas)
        {
                $this->perdidas = $perdidas;

                return $this;
        }

//----- toString -----------------------------------
        function __toString(){
                return "Jugador{Nombre: " . $this->nombre . ", Partidas: " . $this->partidas . ", Ganadas: " . $this->ganadas . ", Perdidas: " . $this->perdidas . "}";
        }
    }
?>