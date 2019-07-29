<?php 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Voyages</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php?page=voyages">Voyages</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Parcourir<span class="sr-only">(current)</span></a>
	      </li>
	      <?php
	      //if(!isset($_SESSION['email'])){
	      ?>
	      <li class="nav-item">
	        <a class="nav-link" href="index.php?page=loginform">Se connecter</a>
	      </li>
	      <?php
	  	  //}
	      //if(isset($_SESSION['email'])){
	      	?>
			<li class="nav-item">
	        	<a class="nav-link" href="index.php?page=addtravel">Ajouter voyage</a>
	      	</li>
	      	<li class="nav-item">
	        	<a href="deconnexion.php" class="btn btn-danger" name="deconnexion">Déconnexion</a>
	      	</li>
	      	<?php
			//}
			?>
	      
	    </ul>
	  </div>
	</nav>

    <?= $content;?>
</body>
</html>