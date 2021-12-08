<?php
namespace App\Controllers;

class ItemsController extends Controller{

    public function index(){
        //toutes les variables que je voudrais créer ici seront accessibles depuis le include de juste en dessous
        include_once ROOT.'/views/items/index.php';
        // echo 'Ici sera la liste des articles';
    }
    public function login(){
        echo ("<b>function login dans ItemController</b>");
        // echo 'Ici sera la liste des articles';
    }
}