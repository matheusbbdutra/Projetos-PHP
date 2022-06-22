<?php

namespace Feirao\Model\Conta;

use Feirao\Validator\ContaValidator;

class Conta
{
    private $agencia;
    private $conta;
    private $saldo;
    private ContaValidator $contaValidator;


    public function __construct(
        string $agencia,
        string $conta
    ) {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = 0;
        $this->contaValidator = new ContaValidator();
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }


    public function  depositar(float $valorDeposito)
    {
        $this->contaValidator->validaDeposito($valorDeposito);
        $this->saldo += $valorDeposito;
    }

    public function sacar(float $valorSaque)
    {
        $this->contaValidator->validaSaque($this->saldo,$valorSaque);
        $this->saldo -= $valorSaque;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino)
    {
        $this->contaValidator->validaTransferencia($valorATransferir,$this->saldo);
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }


}