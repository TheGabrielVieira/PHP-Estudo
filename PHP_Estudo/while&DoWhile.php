<?php 

    $frutas = ['banana', 'pera', 'maca', 'tomate'];

    $contador = count($frutas);

    $i = 2;

    do {
        echo $frutas[$i] . "\n";

        $i++;

    } while ($i < $contador );

    //while ($i < $contador) {

    //    if ($frutas[$i] == "tomate") {
    //        break;
    //    }

    //    echo $frutas[$i] . "\n";

    //    $i++;
    //}

?>