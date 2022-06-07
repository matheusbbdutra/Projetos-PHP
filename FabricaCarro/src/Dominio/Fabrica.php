<?php

namespace Fabrica;

use Fabrica\Pessoa;

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

    public function removeCarro(Pessoa $pessoa, string $modelo)
    {

        foreach ($this->patio as $id => $carro){



            $escolhido = $carro->getModelo();


            if($escolhido === $modelo ){
               $pessoa->setCarro($carro);
               unset($this->patio[$id]);
            }
        }
    }


}
