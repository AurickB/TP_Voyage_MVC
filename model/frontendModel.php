<?php
require 'bddConfig.php';

function getTravel(){
    $db = connect();

    $responce =  $db ->query('SELECT * FROM voyages');

    return $travels = $responce->fetchAll(PDO :: FETCH_ASSOC);

}