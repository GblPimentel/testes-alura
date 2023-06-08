<?php

$notasBimestre1 =[
    'ana' => 10,
    'joao' => 8,
    'maria'  => 9,
    'roberto' => 7,
    'vinicius' =>6
];
$notasBimestre2 =[
    'ana' => 9,
    'joao' => 8,
    'roberto' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1,$notasBimestre2));
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

array_combine($notasAlunos,$nomesAlunos);

array_flip($alunosFaltantes);
