<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\NomeInvalidoException;

require_once "autoload.php";


    $novoTitular = new Titular(
        new CPF("123.123.123-09"),
        'Pedro Petretti',
        new Endereco('São Paulo', 'Liberdade', 'campus', 123)
    );

try {
    $novoCpf = new CPF("paeoiqwe");
} catch (InvalidArgumentException $exception) {
    echo "Tipo invalido, apenas números por favor".PHP_EOL;
}


try {
    $novaPessoa = new Titular(new CPF("123.123.123-09"), 'Peh', new Endereco('São Paulo', 'Liberdade', 'campus', 123)
    );
} catch (NomeInvalidoException $exception) {
    echo $exception->getMessage().PHP_EOL;
}
