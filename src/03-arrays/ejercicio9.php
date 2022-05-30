<?php

    //Definimos un array y lo inicializamos
    $alumnos = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
    
    // Ordenamos los valores del array de menor a mayor
    asort($alumnos);
     
    //Imprimimos el array
    echo "<h1>Array ordenado de menor a mayor</h1>";
    echo "<pre>";
    print_r($alumnos);
    echo "</pre>";

    // Ordenamos las claves del array de menor a mayor
    ksort($alumnos);
     
    //Imprimimos el array
    echo "<h1>Array ordenado de menor a mayor pr clave</h1>";
    echo "<pre>";
    print_r($alumnos);
    echo "</pre>";

    // Ordenamos los valores del array de mayor a menor por Valor
    arsort($alumnos);
     
    //Imprimimos el array
    echo "<h1>Array ordenado de mayor a menor</h1>";
    echo "<pre>";
    print_r($alumnos);
    echo "</pre>";
?>