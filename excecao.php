<?php

/**
 * @throws Exception
*/
function funcaoQueLancaExcecao()
{}

try {
    funcaoQueLancaExcecao();
} catch (Exception $e) {

}
/**
 * @return void
 * @throws Exception
 */
function outraExcecao()
{
    funcaoQueLancaExcecao();
}
