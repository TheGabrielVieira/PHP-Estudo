<?php 

    $nota = 3;
    if($nota >= 7){
        echo "aluno aprovado";
    }
    else if(($nota < 7) && ($nota >= 4)) {
        echo "aluno esta em recuperação";
    }
    else if (($nota < 4) && ($nota >= 2)){
        echo "aluno está em conselho de classe";
    }
    else{
        echo "Aluno reprovado";
    }

?>