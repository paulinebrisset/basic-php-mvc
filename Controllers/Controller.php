<?php
namespace App\Controllers;

    abstract class Controller{
    /*
        M : Afficher une vue
        I : string $fichier : chemin vers le fichier qui contiendra la vue que l'on va obtenir
        I :array $data : contient une requête et le nom de la variable qui va récupérer la requête
        tableau vide par défaut, on pourra ne pas avoir de données.
        O: rien 
    */
    public function render(string $fichier, array $donnees = []){
        
        /*
        prend mon tableau et crée une variable pour chacune des clés renseignées
        + récupère les données et les extrait sous forme de variable
        */
 
         extract($donnees);
        // Crée le chemin et inclut le fichier de vue
        require_once(ROOT.'/Views/'.$fichier.'.php');
    }

}