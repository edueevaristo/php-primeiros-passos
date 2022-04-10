<?php

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        break;
    }
    echo "#$contador" . PHP_EOL;

}
/*
 * Para pularmos uma iteração, utilizamos a condição if, indicando o ==.
Caso deseja que seja exibido até o valor da condição, utilizamos o "break",e  neste caso será exibido até o 12

*/





for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue;
    }
    echo "#$contador" . PHP_EOL;
}

/* Para pularmos uma iteração, utilizamos a condição if, indicando o ==.
Caso deseja que pule a iteração indicada na condição e continue a mostrar na tela, utilizamos o "continue". O mesmo
será executado até "$contador <= 15" for falso

*/