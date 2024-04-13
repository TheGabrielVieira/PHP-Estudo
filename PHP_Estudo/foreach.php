<?php 

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $qtdElementos = count($array);

    foreach ($array as $indice => $value) {
        if ($value % 2 == 0) {
            continue;
        }


        echo "valor do indice: " . $indice . " valor: " . $value . "\n";
    }

    //for ($i=0; $i < $qtdElementos; $i++) { 
    //    echo $array[$i] . "\n";
    //}

?>