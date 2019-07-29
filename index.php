<?php 
require_once 'controller/frontendController.php';

//displayTravel();

//displayLogin();

//displayAddTravel();

if (isset($_GET['page'])){
    displayPage();
} else {
    displayTravel();
}

