<?php

$notas =[
   'ana' => 10,
    'joao' => 8,
    'maria'  => 9,
    'roberto' => 7,
    'vinicius' =>6
];
// A sort ou arsort(decresente) - mantém as chaves / só  o sort tira elas, pode ordernar por chaves e por valores, por chaves = ksort
arsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' .PHP_EOL;
}

var_dump (array_is_list($notas));

//foreach ($notas as $aluno => $nota){
//    if ($aluno === 'vinicius'){
//        return true;
//    }
echo 'Ana fez a prova'. PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguem tirou 10?'. PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?'. PHP_EOL;

echo array_search(10,$notas, true);


//array_key_exists = verifica se a chave existe
//in_array = se o valor existe
//isset = verifica se a chave existe e não é nula