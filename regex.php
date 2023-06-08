<?php

$telefones = ['(11) 98888 - 1145','(11) 94587 - 5847','(11) 94847 - 1817'];

    foreach($telefones as $telefone){
        $regex = '/\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
        $telefoneValido = preg_match(
            $regex,
            $telefone,
                $correspondencia
        );

        if($telefoneValido){
            echo 'Telefone Valido' . PHP_EOL;
        }else{
            echo 'Telefone Invalido' . PHP_EOL;
        }

      echo  preg_replace(
            $regex,
            '(XX) \2',
            $telefone
        ) . PHP_EOL;
    }