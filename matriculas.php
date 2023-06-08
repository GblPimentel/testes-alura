<?php

$alunos2021 =[
    'ana',
    'joao',
    'maria',
    'roberto',
    'vinicius',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = array_merge($alunos2021,$novosAlunos);

array_push($alunos2022, 'Alice','Bob','Charlie'); // add varios elementos no fim;
$alunos2022[] = 'Luiz'; // add 1 elemento ao fim

array_unshift($alunos2022,'Stephane','Rafaela');
// add no inicio

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);