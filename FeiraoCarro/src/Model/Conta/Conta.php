<?php

namespace Feirao\Model\Conta;

use Feirao\Service\Conta\SistemaDeposito;
use Feirao\Service\Conta\SistemaSaque;
use Feirao\Service\Conta\SistemaTransferencia;

class Conta
{
    private $agencia;
    private $conta;
    private $saldo;

    public function __construct(
        string $agencia,
        string $conta
    ) {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = 0;
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }


    public function  depositar(float $valorDeposito)
    {
        $deposita = new SistemaDeposito();
        $aDepositar = $deposita->deposito($valorDeposito);
        $this->saldo += $aDepositar;
    }

    public function sacar(float $valorSaque)
    {
        $sacando = new SistemaSaque();
        $aSacar = $sacando->saque($this->saldo,$valorSaque);
        $this->saldo -= $aSacar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino)
    {
        $transferindo = new SistemaTransferencia();
        $valorTranferir = $transferindo->transferir($valorATransferir,$this->saldo);
        $this->sacar($valorTranferir);
        $contaDestino->depositar($valorTranferir);
    }


}