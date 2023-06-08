<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace(
    ['poxa','caramba'],
    ['P','C'],
    $texto
    ) . PHP_EOL;

    echo strtr($texto, 'poxa', '***@') .PHP_EOL;
    echo strtr($texto, ['poxa'=>'p','caramba'=>'c']) . PHP_EOL;