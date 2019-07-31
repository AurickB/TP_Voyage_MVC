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

function setTravel($voyage){
	$db =connect();

	$sql='INSERT INTO voyages (title,content,img) VALUES (:title , :content , :img)';

	$request = $db->prepare($sql);

	$request->execute([
		':title' => htmlentities(strip_tags($voyage['title'])),
		':content' => htmlentities(strip_tags($voyage['content'])),
		':img' => htmlentities(strip_tags($voyage['img']))
	]);
}

function supTravel($id){
	$db = connect();

	$sql='DELETE FROM voyages WHERE id = "'.$id.'"';

	$request = $db->prepare($sql);

	$request->execute([
	
	]);
}
?>