<?php
/*
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    
*/

    // Recuperamos los parámetros del formulario
    $nombre = $_GET["nombre"];
    $apellido1 = $_GET["apellido1"];
    $apellido2 = $_GET["apellido2"];

    //comprobamos si los parámetros estan vacios

    if (empty($nombre)) {
        echo "El nombre esta vacio</br>";
        echo "<a href=\"ejercicio1.php\">Volver al formulario</a>";
        exit;
    }
    if (empty($apellido1)) {
        echo "El apellido1 esta vacio</br>";
        echo "<a href=\"ejercicio1.php\">Volver al formulario</a>";
        exit;
    }
    if (empty($apellido2)) {
        echo "El apellido2 esta vacio</br>";
    }

    echo "Nombre: $nombre";
    echo "</br>";
    echo "Apellido1: $apellido1";
    echo "</br>";
    echo "Apellido2 : $apellido2"
?>