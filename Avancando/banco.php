<?php

// função de sacar valor
function sacar($conta, float $valorASacar): array
{

    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, saldo insuficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

// função de depositar valor
function depositar($conta, float $valorADepositar): array
{
    if ($valorADepositar < 1) {
        exibeMensagem("Você deve informar um valor para realizar o depósito");
    } else {
        $conta['saldo'] += $valorADepositar;
    }
    return $conta;
}



//CRIANDO UMA Subrotina, criando uma função para ser executada em um bloco de código onde a mesma for adicionada
function exibeMensagem( string $mensagem) {
    echo $mensagem . PHP_EOL;
}


$contasCorrentes = [
    '492.170.678-65' => [
        'titular' => 'Eduardo Evaristo',
        'saldo' => 2300
    ],

    '296.377.628-25' => [
        'titular' => 'Geovana Helen',
        'saldo' => 450
    ],

    '785.422.122-51' =>              [
        'titular' => 'Maria Regina',
        'saldo' => 4000
    ]
];


$contasCorrentes ['492.170.678-65'] = sacar($contasCorrentes ['492.170.678-65'], 500);
$contasCorrentes ['296.377.628-25'] = depositar($contasCorrentes ['296.377.628-25'], 500);



foreach($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
