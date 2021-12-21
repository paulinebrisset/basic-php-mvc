<?php
namespace App\Models\Table;
use App\Models\Model;

/**
 * Modèle pour la table "items"
 */
class ModelItems extends Model {
  
    protected $id_item;
    protected $id_categorie;
    protected $titre;
    protected $description;
    protected $prix;
    protected $publie;
    protected $date;
    protected $image;

    public function __construct(){
        $this->table = 'items';
    }
/******************GUETTERS ET SETTERS**************/

    /* Obtenir la valeur de id_item */ 
    public function getId_item():int{
        return $this->id_item;
    }

    /* Définir la valeur de id_item */ 
    public function setId_item(int $id_item):self {
        $this->id_item = $id_item;
        return $this;
        /*
        return $this permettra de créer les différentes infos en une fois depuis notre instance de modèle
            par exemple faire 
            $item = new Item;
            $article = $item 
            -> setTitre ('Mon titre')
            ->setDecription('Description')
            etc etc
        */
    }
    /* Obtenir la valeur de id_item */ 
    public function getId_categorie():int{
        return $this->id_categorie;
    }

    /* Définir la valeur de id_item */ 
    public function setId_categorie(int $id_categorie):self {
        $this->id_item = $id_categorie;
        return $this;
    }
        /*
    /* Obtenir la valeur de titre */
    public function getTitre():string{
        return $this->titre;
    }

    /*Définir la valeur de titre*/
    public function setTitre(string $titre):self{
        $this->titre = $titre;
        return $this;
    }

    /*Obtenir la valeur de description*/
    public function getDescription():string{
        return $this->description;
    }

    /*Définir la valeur de description*/
    public function setDescription(string $description):self{
        $this->description = $description;
        return $this;
    }

    /*Obtenir la valeur de date*/
    public function getCreatedAt(){
        return $this->date;
    }

    /*Définir la valeur de date*/
    public function setCreatedAt($date):self{
        $this->date = $date;
        return $this;
    }
    /*Obtenir la valeur de prix*/
    public function getPrix(){
        return $this->prix;
    }

    /*Définir la valeur de prix*/
    public function setPrix($prix):self{
        $this->prix = $prix;
        return $this;
    }
    /*Obtenir la valeur de image*/
    public function getImage(){
        return $this->image;
    }

    /*Définir la valeur de image*/
    public function setImage($image):self{
        $this->image = $image;
        return $this;
    }
    /*Obtenir la valeur de publie*/
    public function getPublie(){
        return $this->publie;
    }

    /*Définir la valeur de publie*/
    public function setPublie($publie):self{
        $this->publie = $publie;
        return $this;
    }
}