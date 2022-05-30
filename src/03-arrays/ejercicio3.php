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

//Calculamos El max del array

    $maximo = $numeros[0];
    $post_max = 0;

    for ($i=1; $i < NUM_ELEMENTS; $i++) { 
        if ($maximo <= $numeros[$i]) {
            $maximo = $numeros[$i];
            $post_max = $i;
        }
    }
    echo "El numero más alto es $maximo";
    echo "<br></br>";
    echo "La posición del valor máximo es $post_max";

?>
