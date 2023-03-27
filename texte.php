<?php

class Text{

    private static $suffixe = "€";

    public function withZero($chiffre){
        if($chiffre < 10 ){
            return '0'. $chiffre.self::$suffixe;
        }else{
            return $chiffre.self::$suffixe;
        }

    }
}


?>