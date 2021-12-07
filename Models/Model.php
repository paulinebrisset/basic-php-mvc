<?php
namespace App\Models;
use App\Main\Database;
use PDO;
/*
GENIUS
Ici je met tout ce qui va me servir à manipuler les données. C'est un modèle général, je 
vais créer un modèle pour chaque table de la bdd qui contiendra 
les informations qui lui sont spécifiques.
*/

class Model extends Database{
    // Table de la base de données
    protected $table;
    // Instance de connexion
    private $db;

/*
M Méthode qui exécutera toutes les requêtes
O: PDOStatement|false 
I: string $sql Requête SQL à exécuter + array $attributes Attributs à ajouter à la requête 
*/
    public function executerRequete(string $sql, array $attributs = null){
        // On récupère l'instance de Database, (instance d'instance de PDO, ça auraitpu être juste instance de PDO)
        $this->db = Database::getInstance();

        // On vérifie si on a des attributs
        if($attributs !== null){
            // Requête préparée
            $query = $this->db->prepare($sql);
            //exécution de la requête avec mes paramètres
            $query->execute($attributs);
            //les résultats sont récupérés dans un tableau associatif puisque c'est comme ça que c'est paramétré dans Database
            return $query;
        } else {
            // Requête simple. renvoie un booléen
            return $this->db->query($sql);
        }
    }

/*********************PARTIE LECTURE DES DONNEES *********************/

/* findAll
M : Sélection de tous les enregistrements d'une table, retourne un tableau 
O : Tableau des enregistrements trouvés
I: rien
*/
     
    public function findAll() {
        $query = $this->executerRequete('SELECT * FROM '.$this->table); //TODO : à vérifier 
        return $query->fetchAll();
    }

/* findBy
M : Sélection de plusieurs enregistrements suivant un tableau de critères
O : return array Tableau des enregistrements trouvés
I: array $criteres Tableau de critères
*/
 
    public function findBy(array $criteres) {
        $champs = [];
        $valeurs = [];

        // On boucle pour récupérer les paramètres de la requête et séparer les noms de champs des valeurs
        foreach($criteres as $champ => $valeur){
            $champs[] = "$champ = ?";
            $valeurs[]= $valeur;
        }

        // On transforme le tableau en chaîne de caractères séparée par des AND
       // implode : méthode php qui rassemble les éléments d'un tableau en une chaîne
        $liste_champs = implode(' AND ', $champs);

        // On exécute la requête
        $query = $this->executerRequete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs);
        return $query->fetchAll();
    }

/* find 
M : Sélection d'un enregistrement suivant son id
O : Tableau contenant l'enregistrement trouvé
I : $id id de l'enregistrement
*/

    public function find(int $id) {
    // On exécute la requête
        $query = $this->executerRequete("SELECT * FROM {$this->table} WHERE id = $id");
        return $query->fetch();
    }
/*********************PARTIE UPDATE DES DONNEES *********************/
/*
M : Mise à jour d'un enregistrement suivant un tableau de données
O : booléen (requête éxécutée ou non)
I : int $id id de l'enregistrement à modifier
I: Model $model Objet à modifier
*/
    public function update(int $id, Model $model) {
        $champs = [];
        $valeurs = [];

        // On réorganise le tableau des paramètres pour l'exploiter
        foreach($model as $champ => $valeur){
            // UPDATE annonces SET titre = ?, description = ?, actif = ? WHERE id= ?
            if($valeur !== null && $champ != 'db' && $champ != 'table'){
                $champs[] = "$champ = ?";
                $valeurs[] = $valeur;
            }
        }
        $valeurs[] = $id;

        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(', ', $champs);

        // On exécute la requête (retour vrai ou faux)
        return $this->executerRequete('UPDATE '.$this->table.' SET '. $liste_champs.' WHERE id = ?', $valeurs);
    }

/*********************PARTIE SUPPRESSION DES DONNEES *********************/    
/*
M : Suppression d'un enregistrement
O : bool 
I : int $id id de l'enregistrement à supprimer
*/
    public function delete(int $id){
        return $this->executerRequete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }
/*********************PARTIE HYDRATATION*********************/  
//TODO : je n'ai pas très bien compris cette partie
/* 
M :Hydratation des données
I: array $donnees Tableau associatif des données
O: self Retourne l'objet hydraté
 */
    public function hydrate(array $donnees){
        foreach ($donnees as $key => $value){
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method)){
                // On appelle le setter.
                $this->$method($value);
            }
        }
        return $this;
    }
}
?>