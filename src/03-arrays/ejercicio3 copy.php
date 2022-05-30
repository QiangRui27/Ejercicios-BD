<?php

define("NUM_ELEMENTS", 10);

// Definimos un array
$numeros = array();

//Inicializamos un array cpn valores aleatorios
for ($i = 0; $i < NUM_ELEMENTS; $i++) {
    $numeros[$i] = rand(1, 30);
}

//Imprimimos el array

//con foreach
echo "<h1>Array desordenado</h1>";
echo "<ul>";
foreach ($numeros as $valor) {
    echo "<li>$valor</li>";
}
echo "<ul>";

// Ordenamos el array de forma ascendente

sort($numeros);

echo "<h1>Array ordenado de menor a mayor</h1>";
echo "<ul>";
foreach ($numeros as $valor) {
    echo "<li>$valor</li>";
}
echo "<ul>";
