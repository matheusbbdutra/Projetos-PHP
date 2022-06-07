<?php


require_once 'src/Dominio/Carro.php';
require_once 'src/Dominio/Fabrica.php';
require_once 'src/Dominio/Civic.php';
require_once 'src/Dominio/Fit.php';
require_once 'src/Dominio/Pessoa.php';



use Fabrica\Carro\Fit;
use Fabrica\Carro\Civic;
use Fabrica\Fabrica;
use Fabrica\Pessoa;

$carr = new Civic('Branco');
$carr1 = new Fit('Preto');

$fabricado = new Fabrica();
$pessoa = new Pessoa('Matheus Dutra',60000.00);


$fabricado->addCarro($carr);
$fabricado->addCarro($carr1);



$fabricado->compraCarro($pessoa,'Civic');



