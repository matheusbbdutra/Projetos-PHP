<?php

namespace Feirao\Fabrica;

use Feirao\Pessoa\Pessoa;

class Fabrica
{
    private array $patio;

    public function __construct()
    {
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

    public function compraCarro(Pessoa $pessoa, string $modelo)
    {

        foreach ($this->patio as $id => $carro){
            $escolhido = $carro->getModelo();
            $valorCarro = $carro->getValor();

            if($escolhido === $modelo ) {

                if($pessoa->getSalario() < $valorCarro){
                    throw new \InvalidArgumentException("Você não pode comprar esse carro, pois o valor do carro é de $valorCarro e seu saldo é {$pessoa->getSalario()};.");
                }

                $pessoa->sacar($valorCarro);
                $pessoa->setCarro($carro);
                unset($this->patio[$id]);
            }
        }

    }


}
