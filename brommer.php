<?php
class Brommer{
    private $model='';
    private $uitvoering='';
    private $kleur='';
    private $windscherm='';
    private $img='';

    function __construct($model,$uitvoering,$kleur,$windscherm)
    {
        $this->model = $model;
        $this->uitvoering = $uitvoering;
        $this->kleur = $kleur;
        $this->windscherm = $windscherm;
    }
    function getModel()
    {
        return $this->model;
    }
    function getUitvoering()
    {
        return $this->uitvoering;
    }
    function setImage($img)
    {
        $this->img = $img;
    }
    function getImage()
    {
        return $this->img;
    }



    
}
?>