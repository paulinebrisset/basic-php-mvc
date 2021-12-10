<?php
 namespace App\Controller;

use App\Controllers\Controller;
use App\Controllers\MainController;

// class DeconnectionController extends Controller{

    // public function detruirelasession() {

        session_start();

        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        $redirection = new MainController;
        $redirection->render('main/index', [], 'home');
        exit;
//     }
// }
