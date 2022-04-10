<?php

// um array contendo arrays, transformando assim em um array associativo
$contasCorrentes = [
    //indice alterado como CPF
    49217067865 => [
        // chave (definindo indice)     valor da chave
        'titular' =>                    'Eduardo Evaristo',
        'saldo' => 2300
    ],


    29637762825 => [
        'titular' => 'Geovana Helen',
        'saldo' => 2450
    ],


    78542212251 =>              [
        'titular' => 'Maria Regina',
        'saldo' => 4000
    ]
];



//como adicionar um novo item a sua array associativa
$contasCorrentes[72552314251] = [
    'titular' => 'Edson Gomes',
    'saldo' => 4600
];


//exibindo o valor da chave em tela utilizando o foreach
//foreach($contasCorrentes as $conta) {
//    echo $conta['titular'] . PHP_EOL;
//
//}

//como acessar a chave(indice) que no nosso caso é o CPF e exibi-lo na tela?
//basta indicar no foreach, que a $cpf é a chave e $conta é o valor da chave, conforme abaixo:

foreach($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}


