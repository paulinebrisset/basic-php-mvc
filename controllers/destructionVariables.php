<?php
namespace App\Controller;
use App\Controllers\MainController;


session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

$redirection = new MainController;
$redirection->render('main/index', [], 'home');
exit;
?>