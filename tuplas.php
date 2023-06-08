<?php

$dados = [
   'nome' => 'Vinicius',
   'nota' => 10,
    'idade' =>24,
    ];
//Tipos de List
//['nome'=> $nome,'nota'=> $nota,'idade'=> $idade] = $dados;
//[$nome, $nota, $idade] = $dados; -- Mesma função de list
//list($nome, $nota, $idade) = $dados;
extract($dados); // pega um array e cria varias variaveis;
var_dump($nome, $nota, $idade);

compact('nome', 'nota', 'idade'); //pega varias variaveis e transforma em um unico array;
