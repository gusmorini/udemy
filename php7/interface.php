<?php

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo
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

echo "<h1>Interface</h1>";

$carro = new Civic();
$carro->acelerar(100);
$carro->frenar(40);
$carro->trocarMarcha(3);