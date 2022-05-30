<?php

    define("NUM_ELEMENTS", 10);

    // Definimos un array
    $numeros = array();

    //Inicializamos un array cpn valores aleatorios
    for ($i=0; $i < NUM_ELEMENTS ; $i++) { 
        $numeros[$i] = rand(1,30);
    }

    //Imprimimos el array

    //con foreach
    echo "<h1>Media --> Array con bucle foreach</h1>"; 
    echo "<ul>";
    foreach ($numeros as $valor) {
        echo "<li>$valor</li>";
    }
    echo "<ul>";

    //Calculamos la media del array

    $suma = 0;
    foreach ($numeros as $valor) {
        $suma = $suma + $valor;
    }

    $media = $suma / NUM_ELEMENTS;

    echo ("El valor de la media es $media");
?>