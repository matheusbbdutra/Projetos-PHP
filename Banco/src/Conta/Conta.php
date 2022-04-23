<?php

namespace Banco\Conta;

abstract class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct(string $agencia,string $conta)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = 0;
    }

    abstract function depositar($valorDeposito);
    abstract function sacar($valorSacar);
    abstract function transferir($tipoTransferencia,$valorSacar,$contaDestino);


}
