<?php

namespace App\Models\Table;
use App\Main\Connexion;

//Gestion des articles

class Item {
    //j'ai mis en attribut les champs de la table que je prévois pour stocker les articles 
    private $droit;
    private $titre;
    private $description;
    private $prix;
    private $publie;
    private $date;
    private $url;

//Constructeur. Je veux qu'un compte utilisateur soit défini pour chaque produit mis en vente. 
    public function __construct(User $droit, $titre, $publie=false ){
        $this->droit=$droit;
        $this->titre = $titre;
        $this->publie = $publie;
    }
    
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