<?php 
require_once 'model/frontendModel.php';

function displayTravel($message=null){
    $travels = getTravel();
    require 'view/displayTravels.php';
}

function displayLogin(){
    require 'view/displayLogin.php';
}

function displayAddTravel(){
    require 'view/displayAddTravel.php';
}

// fonction qui permet d'afficher la page sélectionnée
function displayPage(){
    switch ($_GET['page']) {
        case 'voyages':
            displayTravel();
            break;
        case 'loginform':
            displayLogin();
            break;
        case 'addtravel':
            if (isset($_SESSION['mail'])){
                displayAddTravel();
            } else {
                displayLogin();
            }
            break;    
        default:
            displayTravel();
            break;
    }
}