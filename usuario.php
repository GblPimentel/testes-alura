<?php
$nome = 'Gabriel Pimentel';
$email = 'gabriel@hellosolucoes.com ';
$senha = 'á@!@!#';

if (mb_strlen($senha) < 8){
    echo "Essa senha não é segura" . PHP_EOL;
    // STRLEN CONTA OS BITES NÃO OS CARACTERS ..
}

$posicaodoarroba = strpos($email, '@');
$usuario = substr($email, 0, $posicaodoarroba);
echo mb_strtoupper($usuario). PHP_EOL;
// strtoupper MAIUSCULO
// strtolower Minusculo  não alteram a string original
echo substr($email, $posicaodoarroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode( ' ',$nome);

echo 'Nome:' . $nome .PHP_EOL;
echo 'Sobrenome:' . $sobrenome .PHP_EOL;

$csv = 'Gabriel Pimentel, 26, gabriel@hellosolucoes.com.br';


