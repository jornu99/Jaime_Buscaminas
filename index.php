<?php
    include_once 'Tablero.php';

    $p = new Tablero(3);
    $p->eligeDificultad();
    print_r($p);
?>