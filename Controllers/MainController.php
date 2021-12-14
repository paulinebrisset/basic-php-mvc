<?php 
namespace App\Controllers;
use App\Models\Table\ModelItems;

class MainController extends Controller{

    public function index() {
        $articlesModel = new ModelItems;
        $this->render('main/index', [], 'home');
    }
    public function main() {
        $this->render('main/index', [], 'home');
    }
}