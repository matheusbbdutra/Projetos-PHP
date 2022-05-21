<?php

require_once 'src/Carro.php';
require_once 'src/Fabrica.php';

use Fabrica\Fabrica;
use Fabrica\Carro;



$civic = new Fabrica (
            new Carro (
                'Civic',
                'Flex',
                'Automatico',
                'Preto',
                2.0
            ),
            'Honda',
            80000.00
);

var_dump($civic);