<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado." . PHP_EOL;

// informando uma condição, e se ela for satisfeita, executa tudo o que está dentro de chaves

// verificando também para entrar quem tem 18 anos, indicando >= que é "maior ou igual a"

//OBS: Outra forma de escrever essa condição seria "if($idade == 18 || $idade > 18"
//OBS: Outra forma de escrever essa condição seria "if($idade == 18 or $idade > 18"

//Indicando duas condições para executar dentro de chaves, separando elas por "and" ou "&&"

//if = se, ela for satisfeita, executar o que está dentro de chaves
// else = senao, executar tudo o que está dentro de chaves do else
if ($idade >= 18)  {
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;
} else if ($idade >= 16 && $numeroDePessoas > 1){
        echo "Você tem $idade e está acompanhado(a), então pode entrar";
}else{
        echo "Desculpe, você só tem $idade anos. Você não pode entrar";
}


//utilizando o "else if" para uma verificação de duas etapas, caso o primeiro if não atenda.
// dentro do "else", executamos um "if", e caso este "else if" também não atenda, será executado o "else" final.
echo PHP_EOL;
echo "Adeus";