<?php
class Fiets{
    private $banden=0;
    private $merk='';
    private $kleur='';

    function __construct($banden,$merk,$kleur)
    {
        $this->banden = $banden;
        $this->merk = $merk;
        $this->kleur = $kleur;
    }
    function getMerk()
    {
        return $this->merk;
    }
}

