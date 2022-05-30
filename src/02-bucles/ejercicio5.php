<?php

   for ($numero=1; $numero <= 10; $numero++) { 
        print("<h1>Tabla del $numero</h1>");

    print("<table border= \"1\">");
   
    for ($i=1; $i <= 10; $i++) {
        $resultado = $numero*$i;
        print("<tr>"); 
        print("<td> $numero </td>");
        print("<td> x </td>");
        print("<td> $i </td>");
        print("<td> = </td>");
        print("<td> $resultado </td>");
        print("</tr>");
    }
    
    print("</table>");
   }
?>