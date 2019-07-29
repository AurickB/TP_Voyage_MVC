<?php 
session_start();
require_once 'controller/frontendController.php';

if (isset($_GET['sk'])){
    session_destroy();
    header('Location: index.php');
}
else if (isset($_POST['email']) && isset($_POST['password'])){
    require_once 'controller/backendController.php';
    login();
}
// Appeler la fonction displayPage si le paramètre $_GET['page] existe
else if (isset($_GET['page'])){
    displayPage();
} else {
    // Afficher la page par défaut
    displayTravel();
}

