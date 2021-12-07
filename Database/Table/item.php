<?php

namespace Database\Table;
use Database\Connexion;

class Item {
    public static function getLast() {
        return Connexion::getDatabase()->query('SELECT * FROM items',__CLASS__);
    }
    public function __get($key){ //on appelle une méthode magique exemple : get(url) donnera getUrl 
        $method = 'get'.ucfirst($key);
        $this -> $key = $this->$method();
        return $this -> $key;
    }

    public function getUrl () {
        return 'index.php?p=item&id='.$this->id;
    }

    public function getDescription () {
        $html ='<p>'.$this->description.'</p>';
        $html .= '<p><a href="'.$this->getUrl.'">Voir la suite</a></p>';
        return $html;
    }
}