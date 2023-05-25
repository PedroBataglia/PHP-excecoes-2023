<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once "autoload.php";

$contaCorrente = New ContaCorrente(
    new Titular(
    new CPF('123.123.123-32'),
    'Pedro',
    new Endereco('Guatemala', 'Lozandes', 'Moreira', '123')
    )
);
try {
    $contaCorrente->deposita(-199);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo!";
}
