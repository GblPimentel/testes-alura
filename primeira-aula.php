<?php

$nome = "Gabriel Pimentel";

$edaminhafamilia = str_contains($nome, 'Pimentel');
//function verifica se a string tem o parametro citado, caso não tenha retorna um booleano.
if($edaminhafamilia){
    echo "$nome é da minha familia " .PHP_EOL;
}else{
    echo "$nome não é da minha familia" .PHP_EOL;
}
