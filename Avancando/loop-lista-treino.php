<?php

// Treinando para exibir uma lista com todos os itens dentro
echo "LISTA DE ALUNOS DA TURMA B 2022" . PHP_EOL;


$alunos = array('Eduardo Evaristo', 'Geovana Helen', 'Marcio Tenreiro', 'Vitor Zafra', 'Maria Regina', 'Edson Gomes');

for ($i = 0; $i < count($alunos); $i++) {
    echo "Aluno: " . $alunos[$i] . PHP_EOL;
}

