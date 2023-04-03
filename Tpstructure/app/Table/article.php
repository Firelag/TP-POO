<?php

namespace App\Table;

use App\App;

class Article extends Table{

    protected static $table = 'articles';

    public static function find($id){

        
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
        FROM articles LEFT JOIN categories ON category_id = categories.id WHERE articles.id = ?",[$id],true);

    }

    public static function getLast(){
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
        FROM articles LEFT JOIN categories ON category_id = categories.id");
    }


    public static function lastByCategory($category_id){
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
        FROM articles LEFT JOIN categories ON category_id = categories.id WHERE category_id = ?",[$category_id]);

    }



    public function getURL(){
        return 'index.php?p=article&id='. $this->id;    

    }

    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 200). '...' . '</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }

}

?>

