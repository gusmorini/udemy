<?php

function __autoload($nomeClasse)
{
    require_once($nomeClasse.".php");
}

$carro = new Belina();
$carro->acelerar(100);