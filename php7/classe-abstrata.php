<?php

echo '<h1>Classe Abstrata</h1>';

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
{
    public function acelerar($n)
    {
        echo "Acelerou até $n km/h <br>";
    }

    public function frenar($n)
    {
        echo "Frenou até $n km/h <br>";
    }

    public function trocarMarcha($n)
    {
        echo "trocou para ".$n."ª marcha";
    }
}

class Belina extends Automovel
{

}

$carro = new Belina();
$carro->acelerar(200);