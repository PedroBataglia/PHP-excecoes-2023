<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficenteException extends \DomainException
{
    public function __construct(float $valorDoSaque, float $valorDoAtual)
    {
        $mensagem = "Você tentou sacar $valorDoSaque, mas tem apenas $valorDoAtual";
        parent::__construct($mensagem);
    }

}
