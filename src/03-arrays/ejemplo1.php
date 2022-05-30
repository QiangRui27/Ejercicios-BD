<?php

    $productos = array("Disco SSD", "Memoria RAM", "Monitor");

    echo "<pre>";
    print_r($productos);
    echo "</pre>";

    echo ("Número de elementos: ");
    echo (count($productos));
    $num_elementos = count($productos);

    echo "<br></br>";

    for ($i=0; $i < $num_elementos; $i++) { 
        echo "Posición: $i - Valor: $productos[$i]";
        echo "<br>";
    }
    
?>