<?php

    define("NUM_ELEMENTS", 10);

    // Definimos un array
    $numeros = array();

    //Inicializamos un array cpn valores aleatorios
    for ($i=0; $i < NUM_ELEMENTS ; $i++) { 
        $numeros[$i] = rand(1,30);
    }

    //Imprimimos el array
    echo "<h1>Array con bucle for</h1>";
    echo "<ul>";
    for ($i=0; $i < NUM_ELEMENTS; $i++) { 
        echo "<li>$numeros[$i]</li>";
    }

    echo "</ul>";

    //con foreach
    echo "<h1>Array con bucle foreach</h1>";
    echo "<ul>";
    foreach ($numeros as $valor) {
        echo "<li>$valor</li>";
    }
    echo "<ul>";
?>