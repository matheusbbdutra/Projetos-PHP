<?php

require_once 'src/Dominio/Carro.php';
require_once 'src/Dominio/Fabrica.php';

use Fabrica\Fabrica;
use Fabrica\Carro;

$fabricarCarro = new Fabrica ();
$civic = new Carro(
    'Civic',
    'Flex',
    'Automatico',
    'Preto',
    2.0
);

$fit = new Carro(
    'Fit',
    'Flex',
    'Automatico',
    'Preto',
    1.0
);

$fabricarCarro->addCarro($civic);
$fabricarCarro->addCarro($fit);



$fabricarCarro->recuperaPatio();



