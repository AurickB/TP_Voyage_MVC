<?php 
require_once 'model/backendModel.php';

function login(){
    $user = getUser($_POST['email']);
    if ($user){
        if(password_verify($_POST['password'], $user['password'])){
            $_SESSION['mail']=$user['mail'];
            displayTravel();
        } else {
            displayLogin();
        }
    } else {
        displayLogin();
    }  
}

