<?php 

    $carros = ['ferrari', 'bmw', 'mercedes'];

    $endereco = [
        'cep' => "1234567",
        'numero' => "1234567",
        "cidade" => "recife",
        "estado" => "pernambuco"
    ];

    $endercoPessoa = [
        'pessoa1' => array(
            'cep1' => '1234567',
            'cidade1' => 'palmares'
        ),
        'pessoa2' => array(
            'cep2' => '7654321',
            'cidade2' => 'jaboatao'
        )
    ];
    if(isset ($endercoPessoa['pessoa1']['cidade1'])){
        print_r($endercoPessoa['pessoa1']['cidade1']);
    }else{
        echo "chave invalida";
    };

?>