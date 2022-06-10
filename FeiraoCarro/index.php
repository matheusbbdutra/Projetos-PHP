<?php


require_once 'vendor/autoload.php';


use Feirao\Conta\Conta;
use Feirao\ModeloCarro\Fit;
use Feirao\ModeloCarro\Civic;
use Feirao\Fabrica\Fabrica;
use Feirao\Pessoa\Pessoa;

$carr = new Civic('Branco');
$carr1 = new Fit('Preto');



$pj = new Pessoa ('154211516254', 'Auto Show LTDA');
$contaPj = new Conta('0002','021465');
$pj->setConta($contaPj);

$fabricado = new Fabrica($pj);
$pessoa = new Pessoa('11317104447','Matheus Dutra');
$conta = new Conta('0001','031474');

$pessoa->setConta($conta);

$conta->depositar(60000.00);

$fabricado->addCarro($carr);
$fabricado->addCarro($carr1);



$fabricado->compraCarro($pessoa,'Civic',$pj);

print_r($pessoa) . "\n\n\n";

print_r($fabricado);


