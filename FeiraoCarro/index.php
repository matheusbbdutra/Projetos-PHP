<?php


require_once 'vendor/autoload.php';
use Feirao\Model\Conta\Conta;
use Feirao\Model\ModeloCarro\Fit;
use Feirao\Model\ModeloCarro\Civic;
use Feirao\Model\Fabrica\Fabrica;
use Feirao\Model\Pessoa\Pessoa;

$carro1 = new Civic('Branco');
$carro2 = new Fit('Preto');

$pj = new Pessoa ('154211516254', 'Auto Show LTDA');
$contaPj = new Conta('0002','021465');
$pj->setConta($contaPj);

$fabricado = new Fabrica($pj);

$pessoa = new Pessoa('43256445844','Jose Farias');
$conta = new Conta('0001','031474');
$pessoa->setConta($conta);

$conta->depositar(60000.00);
$conta->sacar(10000.00);

$fabricado->addCarro($carro1);
$fabricado->addCarro($carro2);

$fabricado->compraCarro($pessoa,'Civic',$pj);

print_r($pessoa) . "\n\n\n";

print_r($fabricado);


