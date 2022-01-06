<?php

function conectarDb() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices');

    if(!$db){
        echo 'no se conecto correctamente';
        exit;
    }

    return $db;
}