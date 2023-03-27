<?php


/*
    *Permet de générer un formulaire 
*/
class Form{


    /**
     * @var array Données utilisé par le formulaire
     */

    private $data ;

     /**
     * @var string Tag utilisé pour entouuré les champs
     */
    public $surround = 'p';

     /**
     * @var array $data Données utilisé pour le formulaire
     */

    public function __construct($data = array()){
        $this->data = $data;
    }


     /**
     * @param $html string Code Html
     * @return string 
     */

    private function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

       /**
     * @param $index string 
     * @return string 
     */

    private function getValue($index){
        return isset ($this->data[$index]) ? $this->data[$index] : null ;
    }


       /**
     * @param $name string
     * @return string 
     */

    public function input($name){

       return $this->surround( '<input type="text" name="'.$name. '"value="'.$this->getValue($name).'">');

    }

       /**
     
     * @return string 
     */

    public function submit(){

        return $this->surround( '<button type="submit">Envoyer</button>');
    }
}




?>