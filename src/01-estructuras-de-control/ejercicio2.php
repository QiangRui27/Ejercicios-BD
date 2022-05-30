
<?php
    $numero = rand(0,10);

    print("Tu nota es de $numero");
    print("<br>");
  
    if ($numero < 5) {
        print('Insuficiente');
    }elseif ($numero == 5) {
        print('Suficiente');
    }elseif ($numero == 6) {
        print('Bien');
    }elseif ($numero < 9 && $numero > 6) {
        print('Notable');
    }elseif ($numero >= 9) {
        print('Sobresaliente');
    }

?>