<?php

    echo "pos-incremento ";
    $a = 8;
    echo "deve ser 8: " . $a++ . "\n";
    echo "deve ser 9: " . $a . "\n";

    echo "pre-incremento ";
    $a = 8;
    echo "deve ser 9: " . ++$a . "\n";
    echo "deve ser 9: " . $a . "\n";

    echo "pos-decremento ";
    $a = 8;
    echo "deve ser 8: " . $a-- . "\n";
    echo "deve ser 7: " . $a . "\n";

    echo "pre-decremento ";
    $a = 8;
    echo "deve ser 7: " . --$a . "\n";
    echo "deve ser 7: " . $a . "\n";

?>