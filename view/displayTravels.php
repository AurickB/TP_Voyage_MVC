<?php 
ob_start();

foreach ($travels as $travel){
	echo '<div class="container">';
	echo '<div class="jumbotron">';
    echo '<h2>' . $travel['title'] . '</h2></br>';

    if ($travel['img'] != null){
        echo '<img src="view/' . $travel['img'] . '">' ;
	}
	
	echo '<p>' . $travel['content'].'</p>';
	echo '</div>';
	echo '</div>';
}

$content = ob_get_clean();

require_once 'frontend/template.php';