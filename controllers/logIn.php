<?php
//pour récupérer $_SESSION
 session_start();
 //pour avoir le header et le footer, donc avoir script.js linké
 include 'index.php';

//appeller javascript pour changer le nom de l'entête;

header ("location:../index.php");
exit;
?>