<?php

namespace App\Models\Table;

use App\Main\Connexion;

class User{

    private $nom;
    private $mail;
    private $mdp;
    private $droit;

    /*************CONSTRUCTEUR ********************/
    public function __construct(string $nom, string $mail, string $mdp, $droit = false){
        $this->nom = $nom;
        $this->mail = $mail;
        $this->mdp = $mdp;
    }

    /**************GETTERS **********/
    public function getNom(){
        return $this->nom;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getMdp(){
        return $this->mdp;
    }
    public function getDroit(){
        return $this->droit;
    }
    
    /**************SETTERS **********/

    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function setNom(string $mail){
        $this->nom = $mail;
    }
    public function setNom(string $mdp){
        $this->nom = $mdp;
    }
    public function setNom(string $droit){
        $this->nom = $droit;
    }

}
