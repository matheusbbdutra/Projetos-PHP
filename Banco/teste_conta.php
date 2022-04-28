<?php

require 'autoload.php';

use Banco\Conta\ContaCorrente;
use Banco\Conta\ContaPoupanca;

$umaConta = new ContaCorrente('0001','00002');

$umaConta->depositar(500.00);

var_dump($umaConta);

$segundaConta = new ContaCorrente('0001','00003');

$umaConta->transferir('pix',2500.00,$segundaConta);

var_dump($umaConta);

$segundaConta->depositar(500.00);

var_dump($umaConta);
var_dump($segundaConta);

$maria = new ContaPoupanca('0001','0004');
var_dump($maria);

$maria->depositar(1000);

$joao = new ContaPoupanca('0001','0005');

var_dump($joao);

$maria->transferir('ted',500,$joao);
var_dump($maria);


$joao->sacar(11000);

var_dump($joao);
