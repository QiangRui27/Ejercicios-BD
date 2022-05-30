<?php
/*
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
*/

    // Recuperamos los parámetros del formulario
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];

    //comprobamos si los parámetros estan vacios

    if (empty($nombre)) {
        echo "El nombre esta vacio</br>";
        echo "<a href=\"ejercicio2.php\">Volver al formulario</a>";
        exit;
    }
    if (empty($apellido1)) {
        echo "El apellido1 esta vacio</br>";
        echo "<a href=\"ejercicio2.php\">Volver al formulario</a>";
        exit;
    }


    echo "Nombre: $nombre";
    echo "</br>";
    echo "Apellido1: $apellido1";
    echo "</br>";
    echo "Apellido2 : $apellido2"
?>