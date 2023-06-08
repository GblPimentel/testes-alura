<?php

$url = 'https://alura.com.br';

 if (str_starts_with($url, 'https')){
     echo "É uma URL segura";
 }else{
     echo "Não é uma URL segura";
 }
 echo PHP_EOL;
//Essa function verifica se a string começa com esse parametro.

if (str_ends_with($url, '.br')){
         echo "É um dominio brasileiro";
 }else{
     echo "Não é um dominio não é brasileiro";
 }
echo PHP_EOL;
 //Essa function verifica se a string termina com esse parametro.



