<?php
$dia = rand(0,8);

switch ($dia) {
    case '1':
        print('Lunes');
        break;

    case '2':
        print('Martes');
        break;
    
    case '3':
        print('Miércoles');
        break;

    case '4':
        print('Jueves');
        break;
    
    case '5':
        print('Viernes');
        break;
    
    case '6':
        print('Sábado');
        break;

    case '7':
        print('Domingo');
        break;

    default:
        Print(Error);
        break;
}

?>