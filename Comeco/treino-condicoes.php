<?php

$idade = 16;
$numeroDePessoas = 1;
$numeroDeFantasia = 0;

echo "Você só vai poder entrar se tiver a partir de 18 anos e com pelo menos uma fantasia ou" . PHP_EOL;
echo "a partir de 16 anos, acompanhado(a) e com pelo menos uma fantasia." . PHP_EOL . PHP_EOL;

if ($idade >= 18 && $numeroDeFantasia >= 1) {
    echo "Você tem $idade anos e está com $numeroDeFantasia fantasia(s). Pode entrar sozinho na festa :) " . PHP_EOL;

} elseif($idade >= 18 && $numeroDeFantasia < 1) {
    echo "Você tem $idade anos, mas está sem nenhuma fantasia, então não pode entrar na festa." . PHP_EOL;

} elseif($idade >= 16 && $numeroDePessoas >= 1 && $numeroDeFantasia >= 1) {
    echo "Você tem $idade anos, está acompanhado(a),e está com $numeroDeFantasia fantasia, então, pode entrar na festa." . PHP_EOL;

}elseif($idade >= 16 && $numeroDePessoas >= 1 && $numeroDeFantasia < 1) {
    echo "Você tem $idade anos, está acompanhado(a) por $numeroDePessoas pessoa(s), mas está sem fantasia. Você não pode entrar na festa." . PHP_EOL;

} elseif($idade >= 16 && $numeroDePessoas < 1 && $numeroDeFantasia > 1) {
    echo "Você tem $idade anos, não está acompanhado(a), mas está com fantasia. Desculpe, mesmo assim, você não pode entrar na festa pois ainda é menor." . PHP_EOL;
} else {
    echo "Você tem $idade anos, não está acompanhado(a) e está sem fantasia, desculpe, não pode entrar na festa.";
}


/* Sistema de verificação para entrar na festa, funcionando da seguinte forma:

SE = A pessoa tiver 18 anos ou mais, e tiver com 1 fantasia ou mais = PODE ENTRAR
CASO CONTRARIO = A pessoa tiver 18 anos ou mais, e não tiver 1 fantasia = NÃO PODE ENTRAR

CASO CONTRARIO = A pessoa tiver 16 anos ou mais, estiver acompanhada de 1 pessoa ou mais e tiver 1 fantasia = PODE ENTRAR
CASO CONTRARIO = A pessoa tiver 16 anos ou mais, estiver sem companhia de 1 pessoa ou mais e tiver 1 fantasia = NÃO PODE ENTRAR
CASO CONTRARIO = A pessoa tiver 16 anos ou mais, estiver acompanhada de 1 pessoa ou mais e tiver sem fantasia = NÃO PODE ENTRAR
SENAO (CASO FINAL) = A pessoa tiver menos de 16 anos, mesmo tendo fantasia e estando acompanhada = NÃO PODE ENTRAR
*/

