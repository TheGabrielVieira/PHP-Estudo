<?php 

    $arrayNumero = [3,5,6,1,2];

    $qntElementosArray = count($arrayNumero);

    for ($i=0; $i < $qntElementosArray -1; $i++) {
        for ($posicaoAtual=0; $posicaoAtual < $qntElementosArray -$i -1; $posicaoAtual++) { 

            $proximaPosicao = $posicaoAtual + 1;

            if($arrayNumero[$proximaPosicao] < $arrayNumero[$posicaoAtual]){

                $auxiliar = $arrayNumero[$posicaoAtual];
                $arrayNumero[$posicaoAtual] = $arrayNumero[$proximaPosicao];
                $arrayNumero[$proximaPosicao] = $auxiliar; 
            }
        }
    }

    //sort($arrayNumero);
    print_r($arrayNumero) . "\n";


?>