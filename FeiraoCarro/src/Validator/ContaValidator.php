<?php

namespace Feirao\Validator;

class ContaValidator
{
    public function validaTransferencia(float $valorATransferir, float $saldo): void
    {
        if ($saldo < $valorATransferir) {
            throw new \InvalidArgumentException("Você tentou depositar $valorATransferir, mas você possui apenas {$this->formataNumero($saldo)} de saldo.");
        }
    }

    public function validaSaque(float $saldo, float $valorASacar): void
    {
        if ($valorASacar > $saldo) {
            throw new \InvalidArgumentException("Valor a sacar não pode ser maior que seu saldo de R$:{$this->formataNumero($saldo)}");
        }

        if ($valorASacar < 0) {
            throw new \InvalidArgumentException("Valor a sacar não pode ser negativo.");
        }
    }

    public function validaDeposito(float $valorADepositar): void
    {
        if ($valorADepositar < 0.0) {
            throw new \InvalidArgumentException("Você tentou depositar $valorADepositar, mas o valor de deposito não pode ser negativo.");
        }
    }

    private function formataNumero(float $valor): string
    {
        return number_format($valor,2,',','.');
    }
}