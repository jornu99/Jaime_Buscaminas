<?php
    class Tablero {
        public $t;
        private $tam;
        public $modo;
        private $moab;

        public function __construct($tam, $modo){
            $this->tam = $tam;
            $this->modo = $modo;
        }

        public function eligeDificultad($modo){
            switch ($this->modo) {
                case 1:
                    $this->tam = 5;
                    $this->moab = 2;
                    break;

                case 2:
                    $this->tam = 10;
                    $this->moab = 4;
                    break;

                case 3:
                    $this->tam = 20;
                    $this->moab = 8;
                    break;
                
                default:
                    $this->tam = 5;
                    $this->moab = 2;
                    break;
            }
        }
        
        public function iniciarTablero($modo, $tam){
            for ($i=0; $i < $this->tam; $i++) { 
                $this->t[] = '-';
            }
        }
    }
?>