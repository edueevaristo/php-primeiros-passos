<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18, 34, 35, 28, 29, 22, 23, ];

for ($i = 0; $i < count($idadeList);  $i++) {
    echo $idadeList[$i] . PHP_EOL;
}


/* Para exibir todos os items de um array, utilizamos o for dando um "Loop na Lista", ficando da seguinte forma:

$i = 0 ----------> Inicializamos com o nosso índice inicial, que no caso é 0;
$i < 7 ----------> Após isso, inserimos a variável do índice, indicando se o 7 for menor que $i, executar o echo
$i++ ------------> Logo após a execução acima, incrementar mais um e realizar o mesmo procedimento, até que o $i não seja menor que zero, ou seja, quando for igual ao índice 7
que seria o número na lista inexiste, visto que vamos até o índice 6. */


// Neste caso em específico, sabemos o total de nossa lista, mas e se não soubessemos? Se a array viesse de um banco de dados?
// for ($i = 0; $i < 7;  $i++)
// Neste caso acima, o código ficará da seguinte forma for ($i = 0; $i < count($idadeList);  $i++)
// O count(), ele pegará sempre o total dos itens da lista, caso seja adicionado mais um item a lista, ele sempre vai pegar o total.