<?php

    $j=01;
    

    while ($j <= 10 ) {
        print("<h1>Tabla del $j</h1>");

    print("<table border= \"1\">");
   
    for ($i=1; $i <= 10; $i++) {
        $resultado = $j*$i;
        print("<tr>"); 
        print("<td> $j </td>");
        print("<td> x </td>");
        print("<td> $i </td>");
        print("<td> = </td>");
        print("<td> $resultado </td>");
        print("</tr>");
    }
    
    print("</table>");
    $j++;
    }

   
   
