<?php

namespace Fabrica;

use Doctrine\Common\Collections\ArrayCollection;
use Fabrica\Pessoa;

class Fabrica
{
    protected array $patio;

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

    //Retorna a chave do array do modelo escolhido
    public function escolheCarro(string $modelo)
    {
        $values = $this->patio;
        foreach ($values as $key => $value){
            $vl = $value->getModelo();
            if($vl === $modelo ){
               $key_filter = $key;
            }
        }
        $carro = $values[$key_filter];

        $carro->compraCarro($carro);

    }





}
