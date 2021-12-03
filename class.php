<?php
class Connexion {

}

class User {
    public $nom;
    public $mail;
    public $password;
    public $droit;
    public $datedenaissance;

    public function __construct($nom, $mail, $password, $droit) {
        $this-> nom=$nom;
        $this->mail=$mail;
        $this->password=$password;
        $this->droit=$droit;
    } 
    public function enregistrerDansLaBdd () {

    }
}
?>
