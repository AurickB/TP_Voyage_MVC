<?php 
require_once 'bddConfig.php';

function getUser($mail){
    $db = connect();

	$request = $db->prepare('SELECT * FROM users WHERE mail = :email');

	$request->execute([
		':email' => htmlentities(strip_tags($mail)) 
	]);

	return $request->fetch(PDO :: FETCH_ASSOC);
}
?>