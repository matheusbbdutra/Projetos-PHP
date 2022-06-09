<?php


require_once 'vendor/autoload.php';


use Feirao\ModeloCarro\Fit;
use Feirao\ModeloCarro\Civic;
use Feirao\Fabrica\Fabrica;
use Feirao\Pessoa\Pessoa;

$carr = new Civic('Branco');
$carr1 = new Fit('Preto');

$fabricado = new Fabrica();
$pessoa = new Pessoa('Matheus Dutra',60000.00);


$fabricado->addCarro($carr);
$fabricado->addCarro($carr1);



$fabricado->compraCarro($pessoa,'Civic');

print_r($pessoa);



