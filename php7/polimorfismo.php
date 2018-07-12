<?php
/*
    polimorfismo, método com o mesmo nome em classes diferentes 
    que tem comportamentos distintos
*/

abstract class Animal
{
    public function falar()
    {
        return 'fala';
    }
    public function mover()
    {
        return 'anda';
    }
}

class Cachorro extends Animal
{
    public function falar()
    {
        return 'late';
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return 'mia';
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return 'canta';
    }
    public function mover()
    {
        /*  parent se refere ao objeto da classe pai
            this se refere ao objeto da classe atual
        */
        return 'voa e '.parent::mover();
    }
}

$cachorro = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();

echo $cachorro->falar().' - '.$cachorro->mover().'<br>';
echo $gato->falar().' - '.$gato->mover().'<br>';
echo $passaro->falar().' - '.$passaro->mover().'<br>';