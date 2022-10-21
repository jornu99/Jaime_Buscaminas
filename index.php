<?php
    include_once 'Tablero.php';
    header("Content-Type:application/json");

    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $paths = $_SERVER['REQUEST_URI'];

    if($requestMethod != 'GET'){
        header("HTTP/1.1 405 Peticion no permitida");
        $mensaje = [
            'cod' => '405',
            'des' => 'Petición no permitida'
        ];
        echo json_encode($mensaje);
    }else{
        $parametros = explode('/', $paths);
        unset($parametros[0]);

        if (count($parametros) > 2 || count($parametros) === 0){
            header('HTTP/1.1 405 Numero de argumentos incorrecto');
            $mensaje = [
                'cod' => '405',
                'dec' => 'Demasiados argumentos'
            ];
            echo json_encode($mensaje);
        }else{
            if(count($parametros) === 2){
                $modo = array_shift($parametros);
                $pos = array_shift($parametros);

                $t = new Tablero($modo);
                $
                $t->iniciarTablero();
                $t->addMinas();
                $t->pistaCasilla($pos);
            }else{
                if(count($parametros) === 1){
                    $modo = array_shift($parametros);
                    $pos = array_shift($parametros);

                    $t = new Tablero($modo);
                    $tablero->iniciarTablero();
                    $tablero->addMinas();
                    $tablero->pistaCasilla($pos);
                }
            }
        }
    }
    //echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
    // $t = new Tablero(3);
    // $t->eligeDificultad();
    // $t->iniciarTablero();
    // //var_dump($t);
    // //print_r ($t->t);
    // $t->addMinas();
    // $t->pistaCasilla();
    // print_r ($t->t);
?>