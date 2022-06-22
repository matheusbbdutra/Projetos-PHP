<?php

namespace Feirao\Model\Fabrica;


use Feirao\Model\Pessoa\Pessoa;
use Feirao\Service\Fabrica\EscolheCarro;

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
        $iniciandoCompra = new EscolheCarro();
        $iniciandoCompra->comprandoCarro($this->patio, $pessoa, $modelo, $pj);
    }
}
