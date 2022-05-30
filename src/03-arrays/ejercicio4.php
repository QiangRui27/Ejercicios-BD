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

//Calculamos El nim del array

    $minimo = $numeros[0];
    $post_min = 0;

    for ($i=1; $i < NUM_ELEMENTS; $i++) { 
        if ($minimo >= $numeros[$i]) {
            $minimo = $numeros[$i];
            $post_max = $i;
        }
    }
    echo "El numero más bajo es $minimo";
    echo "<br></br>";
    echo "La posición del valor mínimo es $post_max";

    // el ejercicio anterior y este (max y min) se puede hacer con las funciones 
    // max(array) y min(array) añadiendolos en una variable

?>
