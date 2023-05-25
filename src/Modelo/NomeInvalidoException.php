<?php

namespace Alura\Banco\Modelo;

class NomeInvalidoException extends \InvalidArgumentException
{
    public function __construct(string $valorNome, float $minNumeros = 5)
    {
        $mensagem = "Nome $valorNome é muito curto, deve ter mais de $minNumeros caracteres";
        parent::__construct($mensagem);
    }
}
