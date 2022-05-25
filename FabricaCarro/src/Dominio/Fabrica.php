<?php

namespace Fabrica;


class Fabrica
{
    protected array $patio;

    public function __construct()
    {
        $this->patio = [];
    }

    public function addCarro(Carro $carro)
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



}
