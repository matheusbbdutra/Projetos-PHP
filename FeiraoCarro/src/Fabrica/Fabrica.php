<?php

namespace Feirao\Fabrica;

use Feirao\Conta\Conta;
use Feirao\Pessoa\Pessoa;

class Fabrica
{
    private Pessoa $pessoaJuridica;
    private array $patio;


    public function getPessoaJuridica(): Pessoa
    {
        return $this->pessoaJuridica;
    }


    public function __construct(Pessoa $pessoaJuridica)
    {
        $this->pessoaJuridica = $pessoaJuridica;
        $this->patio = [];
    }

    public function addCarro($carro)
    {
        $this->patio[] = $carro;
    }

    public function recuperaPatio()
    {
        foreach ($this->patio as  $values){
          echo 'Modelo: ' . $values->getModelo() . PHP_EOL;
          echo 'Tipo de Cobustivel: ' . $values->getTipoCobustivel() . PHP_EOL;
          echo 'Tipo de Cambio: ' . $values->getTipoCambio() . PHP_EOL;
          echo 'Cor: ' . $values->getCor() . PHP_EOL;
          echo 'Motor: ' . $values->getPotenciaMotor() . PHP_EOL;
        }

    }

    public function compraCarro(Pessoa $pessoa, string $modelo, Pessoa $pj) : void
    {
        foreach ($this->patio as $id => $carro){
            $escolhido = $carro->getModelo();
            $valorCarro = $carro->getValor();

            if($escolhido === $modelo ) {
                if($pessoa->getConta()->getSaldo() < $valorCarro){
                    throw new \InvalidArgumentException("Você não pode comprar esse carro, pois o valor do carro é de $valorCarro e seu saldo é {$conta->getSaldo()};.");
                }
                $pessoa->getConta()->transferir($valorCarro,$pj->getConta());
                $pessoa->setCarro($carro);
                unset($this->patio[$id]);
            }
        }
    }
}
