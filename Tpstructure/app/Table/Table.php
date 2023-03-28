<?php

namespace App\Table;

use App\App;

class Table {
    protected static $table;

    private static function getTable(){
        if(self::$table === null){
            self::$table = __CLASS__;
            die(self::$table);
        }
        return self::$table;
    }
    public static function all(){
        

        return App::getDb()->query("SELECT *
        FROM ".self::getTable(). "", __CLASS__);
    }




    public function __get($key){

        $method = 'get'. ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
        
    }


   

}

?>