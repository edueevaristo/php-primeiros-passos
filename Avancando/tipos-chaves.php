<?php


$array = [
    1 => 'a',
    '1' => 'b',
    1.55 => 'c',
    true => 'd',

];

var_dump($array);


/* Jeito incorreto de se realizar, a chave é permitida somente com strings ou números inteiros
qualquer outro caso que você executar isso acima, os valores que não são strings
ou inteiros serão convertidos para strings ou inteiros de acordo com o que você adicionou nas chaves */