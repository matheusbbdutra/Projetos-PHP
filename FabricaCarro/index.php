<?php


require_once 'src/Dominio/Carro.php';
require_once 'src/Dominio/Fabrica.php';
require_once 'src/Dominio/Civic.php';
require_once 'src/Dominio/Fit.php';




use Fabrica\Carros\Fit;
use Fabrica\Carros\Civic;
use Fabrica\Fabrica;

$carr = new Civic('Branco');
$carr1 = new Fit('Preto');

$fabricado = new Fabrica();

$fabricado->addCarro($carr);
$fabricado->addCarro($carr1);


$fabricado->escolheCarro('Civic');