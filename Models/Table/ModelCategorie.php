<?php
namespace App\Models\Table;
use App\Models\Model;

/**
 * Modèle pour la table "items"
 */
class ModelCategorie extends Model {
    protected $id;
    protected $titre;
    protected $description;

    public function __construct(){
        $this->table = 'categories';
    }
}