<?php

namespace Altura;

class Altura
{
    private  float $altura;

    public function __construct(float $altura)
    {
        $this->altura = $altura;
    }

    public function getAltura() : float
    {
        return $this->altura;
    }



}