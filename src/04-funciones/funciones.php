<?php
function hola_mundo(){
    echo "Hola Mundo!";
    }

function suma($a, $b){
    return $a + $b;
}


    function imprimir_tabla_multiplicar($numero) {
        echo "<table border=\"1\">";
        for ($i=0; $i < 10; $i++) { 
            $resultado = $numero*$i;
            print("<tr>"); 
            print("<td> $numero </td>");
            print("<td> x </td>");
            print("<td> $i </td>");
            print("<td> = </td>");
            print("<td> $resultado </td>");
            print("</tr>");
        }
        echo "</table>";
    }

?>

