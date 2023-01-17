<?php
class Fietsenwinkel{
    private $fietsen = [];
    private $brommers = [];

    function addFiets($Fiets)
    {
        array_push ($this->fietsen,$Fiets);
    }

    function addBrommer($Brommer)
    {
        array_push ($this->brommers,$Brommer);
    }

    function getFietsen()
    {
        return $this->fietsen;
    }

}
?>




























}}