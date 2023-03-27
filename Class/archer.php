<?php

class Archer extends personnage{

    
    public $vie = 40;

    public function __construct($nom){
        $this->vie= $this->vie / 2;
        parent::__construct($nom);
    }

    public function attaque($cible){
        $cible->vie -= 2 * $this->atk;
        parent::attaque($cible);
    }
}



?>