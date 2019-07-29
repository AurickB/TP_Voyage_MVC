<?php 
require_once 'model/frontendModel.php';

function displayTravel(){
    $travels = getTravel();
    require 'view/displayTravels.php';
}