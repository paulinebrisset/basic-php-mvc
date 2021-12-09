<?php 
namespace App\Controllers;

class MainController extends Controller{

    public function index() {
        echo ("vers page home");
    $this->render('main/index', [], 'home');
    }
}