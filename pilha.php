<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (Exception |Error $problema) {
        echo "Na função 2, encontramos um problema" . PHP_EOL;
        echo $problema->getMessage(). PHP_EOL;
        echo $problema->getTraceAsString();

    }
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new BadFunctionCallException();

    echo 'Saindo da função 2' . PHP_EOL;
}

//main
echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
