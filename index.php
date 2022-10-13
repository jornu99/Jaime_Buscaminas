<?php
    include_once 'Tablero.php';

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
        }
    }
    echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
?>