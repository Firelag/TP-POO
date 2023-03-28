<?php

namespace App\Table;

use App\App;


//17:20 youtube 14/31
class Categorie extends Table{

    protected static $table = 'categories';

    
    public function getURL(){
        return 'index.php?p=categorie&id='. $this->id;    

    }
   


}

?>