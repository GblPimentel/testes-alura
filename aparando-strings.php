<?php

$csv = ',Gabriel Pimentel,26,';

echo trim($csv, ',.') . PHP_EOL;
echo ltrim($csv, ',.') . PHP_EOL;
echo rtrim($csv, ',.') . PHP_EOL;

//Essa funçao só apara as strings, ela não pega dados do meio da string.


