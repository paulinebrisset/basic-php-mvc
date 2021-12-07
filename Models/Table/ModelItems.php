<?php
namespace App\Models\Table;
use App\Models\Model;

/**
 * Modèle pour la table "items"
 */
class ModelItems extends Model {
    protected $id;
    protected $titre;
    protected $description;
    protected $prix;
    protected $publie;
    protected $date;
    protected $url;

    public function __construct(){
        $this->table = 'items';
    }
/******************GUETTERS ET SETTERS**************/

    /* Obtenir la valeur de id */ 
    public function getId():int{
        return $this->id;
    }

    /* Définir la valeur de id */ 
    public function setId(int $id):self {
        $this->id = $id;
        return $this;
    }

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
    /*Obtenir la valeur de url*/
    public function getUrl(){
        return $this->url;
    }

    /*Définir la valeur de url*/
    public function setUrl($url):self{
        $this->url = $url;
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