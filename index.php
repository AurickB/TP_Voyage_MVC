<?php 
session_start();
require_once 'controller/frontendController.php';

if (isset($_GET['sd'])){
    session_destroy();
    header ('Location: index.php');
} 
else if (isset($_POST['title']) && isset($_POST['content'])){
    require_once 'controller/backendController.php';
    addtravel();
} 
else if (isset($_POST['email']) && isset($_POST['password'])){
    require_once 'controller/backendController.php';
    login();
} 
else if (isset($_SESSION['mail']) && isset($_GET['page']) && $_GET['page']== 'deletetravel'){
    require_once 'controller/backendController.php';
    deleteTravel($_GET['idtravel']);
} 
else if (isset($_GET['page'])){
    displayPage();
} 
else {
    // Afficher la page par défaut
    displayTravel();
}

