<?php

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $dbname = "tukicitas";

    $xcon = mysqli_connect($host, $user, $password, $dbname);

    if(!$xcon)
    {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL; #MOSTRAR LA DOCUMENTACIÖN DE PHP
        echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

?>