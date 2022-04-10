<?php

// como declarar um array no PHP

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeEduardo, $idadeSusan, $idadeGeovana) = $idadeList;

// buscando um item dentro da Array, lembrando, o primeiro item sempre o indice é igual a 0.
//$umaIdade = $idadeList[2];
//
//echo $umaIdade;


//para adicionar um item no ultimo indice, no indice vazio, sem precisar passar o "count"
$idadeList[] = 44;


foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
}


/// DUBANKS




// também conseguimos declarar um array da seguinte forma:
// $filmes = array('Avengers: Endgame', 'Captain Marvel', 'Homem-Formiga e a Vespa');
