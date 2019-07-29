<?php
require 'bddConfig.php';

function getTravel(){
    $db = connect();

    $responce =  $db ->query('SELECT * FROM voyages');

    $travels = $responce->fetchll(PDO :: FETCH_ASSOC);

}