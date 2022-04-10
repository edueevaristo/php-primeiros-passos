<?php
echo "CÁLCULO DE IMC" . PHP_EOL;



$peso = 163;
$altura = 1.90;

$imc = $peso / $altura **2;


if ($imc < 18.5) {
    echo "O seu IMC indica que você está com magreza, o seu grau de obesidade é 0";

} elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "O seu IMC indica que você está no peso ideal, o seu grau de obesidade é 0";

}elseif ($imc >= 25.0 && $imc < 24.9) {
    echo "O seu IMC indica que você está com sobrepeso, o seu grau de obesidade é I";

}elseif ($imc >= 30.0 && $imc < 39.9) {
    echo "O seu IMC indica que você está com obesidade, o seu grau de obesidade é II";

} else {
    echo "O seu IMC indica que você está com obesidade grave \"mórbida\", o seu grau de obesidade é III. Procure um médico imediatamente!";
}



//MENOR QUE 18,5	MAGREZA	                0
//ENTRE 18,5 E 24,9	NORMAL	                0
//ENTRE 25,0 E 29,9	SOBREPESO	            I
//ENTRE 30,0 E 39,9	OBESIDADE	            II
//MAIOR QUE 40,0	OBESIDADE GRAVE	        III