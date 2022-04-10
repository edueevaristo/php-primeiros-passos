<?php

$conta1 = [
    // chave (definindo indice)     valor da chave
    'titular' =>                    'Eduardo Evaristo',
    'saldo' => 2300
];

$conta2 = [
    'titular' => 'Geovana Helen',
    'saldo' => 2450
];

$conta3 = [
    'titular' => 'Maria Regina',
    'saldo' => 4000
];


// um array contendo arrays, transformando assim em um array associativo
$contasCorrentes = [$conta1, $conta2, $conta3];


//Uma forma de exibir somente os titulares, somente uma das chaves criadas dentro da array

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}