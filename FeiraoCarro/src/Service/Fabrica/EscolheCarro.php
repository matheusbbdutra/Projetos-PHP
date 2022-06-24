<?php

namespace Feirao\Service\Fabrica;

use Feirao\Model\Pessoa\Pessoa;
use Feirao\Model\Conta;

class EscolheCarro
{
    public function comprandoCarro(array &$patio,Pessoa $pessoa, string $modelo, Pessoa $pj)
    {
        foreach ($patio as $id => $carro){
            $escolhido = $carro->getModelo();
            $valorCarro = $carro->getValor();

            if($escolhido === $modelo ) {
                if($pessoa->getConta()->recuperaSaldo() < $valorCarro){
                    throw new \InvalidArgumentException("Você não pode comprar esse carro, pois o valor do carro é de $valorCarro e seu saldo é {$conta->getSaldo()};.");
                }
                $pessoa->getConta()->transferir($valorCarro,$pj->getConta());
                $pessoa->setCarro($carro);
                unset($patio[$id]);
            }
        }
    }
}