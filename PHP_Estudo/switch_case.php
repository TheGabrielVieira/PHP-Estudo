<?php 

    $sorteio = rand(0,5);

    echo "valor sorteado " . $sorteio;

    switch ($sorteio) {
        case 0:
            echo " você ganhou 2 pontos";
            break;
        case 1:
            echo " você perdeu 1 ponto";
            break;
        case 2:
            echo " você ganhou 3 ponsto bonus parabens";
            break;
        
        default:
            echo " Jogue novamente";
            break;
    }

?>