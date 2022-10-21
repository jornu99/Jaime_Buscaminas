<?php
    class Tablero {
        public $t;
        private $tam;
        public $modo;
        private $mina;
        public $resultado;

        public function __construct(){
            
        }

        public function __construct2($modo){
            $this->modo = $modo;
            $this->t = [];
        }

        public function __toString(){
            // return '{ Tablero: ' . $this->t . ', Tamaño: ' . count($this->t) . ', Modo:' . $this->modo . ', Mina: ' . $this->mina . ' }';
            return '{ Tablero: ' . $this->t . ' }';
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
            $min = $this->mina;

            while ($min != 0) {
                $pos = rand(0, count($this->t) - 1);

                if($this->t[$pos] != '*'){
                    $this->t[$pos] = '*';
                    $min--;
                }
            }
        }

/**
 * ---- $res = 0 (No hay bombas alrededor)
 * ---- $res = 1 (Hay una bomba alrededor)
 * ---- $res = 2 (Hay dos bombas alrededor)
 */
        public function pistaCasilla(){
            for ($i=0; $i < $this->tam; $i++) { 
                $res = 0;
                
                if($this->t[$i] != '*'){
                    switch ($i) {
                        case 0:
                            if($this->t[$i + 1] == '*'){
                                $this->t[$i] = $res + 1;
                            }else{
                                $this->t[$i] = $res;
                            }
                            break;
                        
                        case (count($this->t) - 1):
                            if($this->t[$i - 1] == '*'){
                                $this->t[$i] = $res + 1;
                            }else{
                                $this->t[$i] = $res;
                            }
                            break;
                            
                        default:
                            if($this->t[$i + 1] == '*'){
                                $this->t[$i] = $res + 1;
                            }else{
                                $this->t[$i] = $res;
                            }
                            
                            if($this->t[$i - 1] == '*'){
                                if($res == 0){
                                    $this->t[$i] = $res += 1;
                                }
                            }
                            break;
                    }
                }
            }
        }

        function comprobarTablero($pos){
            $resultado = false;

            if($this->t[$pos] == '*'){
                $resultado = true;
            }
            return $resultado;
        }

        function getResultado($pos){
            return $this->t[$pos];
        }
    }
?>