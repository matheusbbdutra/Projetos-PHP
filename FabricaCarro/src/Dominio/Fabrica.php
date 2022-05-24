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

    public function recuperaPatio(array $patio)
    {
        list($patio)
        foreach ($patio as $key => $values){
            echo $key . $values;
        }
    }



}
