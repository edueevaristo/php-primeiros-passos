<?php

function sacar($conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, saldo insuficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
        exibeMensagem("{$conta['titular']}, você sacou R$ $valorASacar, saldo restante de R$ {$conta['saldo']}" . PHP_EOL);
    }
    return $conta;
}


function depositar($conta, float $valorADepositar): array
{
    if ($valorADepositar < 1) {
        exibeMensagem("Você deve informar um valor para realizar o depósito");
    } else {
        $conta['saldo'] += $valorADepositar;
        exibeMensagem("{$conta['titular']}, você acabou de realizar o depósito de R$ $valorADepositar, saldo atual de R$ {$conta['saldo']}" . PHP_EOL);
    }
    return $conta;
}


function exibeMensagem( string $mensagem) {
    echo $mensagem . PHP_EOL;
}


function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}



//function exibeConta(array $conta)
//{
//    //funcao list
//    ['titular' => $titular, 'saldo' => $saldo] = $conta;
//
//    //exibindo em tela com HTML
//    echo "<li>Titular: $titular. <br> Saldo: $saldo</li>";
//}