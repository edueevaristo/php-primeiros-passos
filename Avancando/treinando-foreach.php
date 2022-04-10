<?php

 echo "BANCO DO EDU | ALTURAS" . PHP_EOL . PHP_EOL;

$contasBancarias = [
    3003 => [
     'Titular' => 'Eduardo Evaristo',
     'Saldo Atual' => 3450.00,
     'Limite de Crédito Liberado' => 7000
],
    3004 => [
    'Titular' => 'Geovana Helen',
    'Saldo Atual' => 5450.00,
    'Limite de Crédito Liberado' => 10000
],
    3005 => [
        'Titular' => 'Welligton Ribeiro',
        'Saldo Atual' => 9420.00,
        'Limite de Crédito Liberado' => 12000
],
    3006 => [
        'Titular' => 'Maria Regina',
        'Saldo Atual' => 13450.39,
        'Limite de Crédito Liberado' => 27000
    ]
];




//adicionando um novo item ao array associativo
$contasBancarias[3007] = [
    'Titular' => 'Edson Gomes',
    'Saldo Atual' => 34000.44,
    'Limite de Crédito Liberado' => 40000.00
];





foreach($contasBancarias as $numeroConta => $conta) {
    echo "Conta n° " . $numeroConta . PHP_EOL . "Cliente: " . $conta['Titular'] . PHP_EOL . "Saldo Atual: R$" . $conta['Saldo Atual'] . PHP_EOL .
        "Limite de Crédito liberado: R$" . $conta['Limite de Crédito Liberado'] . PHP_EOL . PHP_EOL;
}
    // ou

//    echo "Cliente: " . $conta['Titular'] . PHP_EOL;
//    echo "Saldo Atual: R$" . $conta['Saldo Atual'] . PHP_EOL . PHP_EOL;
