<?php

$debitos = array();
$creditos = array();

array_push($debitos, 10);
array_push($debitos, 20);


// Final do dia, recebi mais 0,30 centavos
array_push($debitos, 30);

// criando uma função para exibir o resultado
function saldo(array $debitos, array $creditos) {
    return array_sum($creditos) - array_sum($debitos);
}

$saldo = saldo($creditos, $debitos);

//exibindo o resultado na tela
echo number_format($saldo, 2, ',', '.') . PHP_EOL;


//Mostrando o tamanho máximo e minimo do int e float (ou double)
echo PHP_INT_MAX . PHP_EOL;
echo PHP_INT_MIN . PHP_EOL;
echo PHP_FLOAT_MAX . PHP_EOL;
echo PHP_FLOAT_MIN . PHP_EOL;



