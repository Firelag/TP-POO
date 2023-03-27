<?php
class personnage{

    const MAX_VIE = 100;
    public $vie =80;
    protected $atk = 20;
    protected $nom;


    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function regenerer($vie = null){
        if(is_null(($vie))){
            $this->vie = self::MAX_VIE;
        }else{
            $this->vie += $vie;
        }
        
    }
    public function mort()
    {
        return $this->vie <= 0;
    }

    private function empecher_negatif(){
        if($this->vie < 0){
            $this->vie=0;
        }
    }

    function attaque($cible){
        $cible->vie-=$this->atk;
    }
}

?>