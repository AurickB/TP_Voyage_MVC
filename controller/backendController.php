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

function addTravel(){

    if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])){
        $filedir = 'images/';
        $img = $filedir.$_FILES['img']['name'];
        $ext = pathinfo($_FILES['img']['name'])['extension'];
        if(in_array($ext, ['png','jpg','jpeg'])){
            move_uploaded_file( $_FILES['img']['tmp_name'], $img);
        }
    } else {
        $img = null;
    }
    $voyage = [
        'title' =>$_POST['title'],
        'content' =>$_POST['content'],
        'img'=> $img
    ];
    setTravel($voyage);
    header ('Location: index.php');
}

function deleteTravel($id){
    supTravel($id);
    header ('Location: index.php');
}


