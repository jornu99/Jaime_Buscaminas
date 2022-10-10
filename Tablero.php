<?php
    class Tablero {
        public $t;
        private $tam;
        public $modo;
        private $mina;

        public function __construct($modo){
            $this->modo = $modo;
        }

        public function __toString(){
            return '{ Tablero: ' . $this->t . ', Tamaño: ' .$this->tam. ', Modo:' . $this->modo . ', Mina: ' . $this->mina . ' }';
        }

        public function eligeDificultad(){
            switch ($this->modo) {
                case 1:
                    $this->tam = 5;
                    $this->mina = 2;
                    break;

                case 2:
                    $this->tam = 10;
                    $this->mina = 4;
                    break;

                case 3:
                    $this->tam = 20;
                    $this->mina = 8;
                    break;
                
                default:
                    $this->tam = 5;
                    $this->mina = 2;
                    break;
            }
        }
        
        public function iniciarTablero(){
            for ($i=0; $i < $this->tam; $i++) { 
                $this->t[] = '-';
            }
        }

        public function addMinas(){
            self::iniciarTablero();

            for ($i=0; $i < $this->tam; $i++) { 
                
            }
        }
    }
?>