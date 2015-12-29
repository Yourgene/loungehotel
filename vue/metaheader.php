<?php 
	if (isset($_SESSION['username'])) {
      // This session already exists, should already contain data
        echo "User ID:", $_SESSION['user_id'], "<br />";
        echo "User Name:", $_SESSION['username'], "<br />";
    }	
?>

<!DOCTYPE HTML>
<html>

	<head>
		<meta charset = "utf-8" />
		<title>Gestion Hotel</title>
        <base href="http://localhost/loungehotel/">
	</head>

<header>
<!--Création du bandeaux au dessus de la photo avec le Nom du Groupe -->
	<div class="Bandeau"><a href="accueil"><img class="iconeSGDF" src="<?php echo CHEMIN_IMAGES ?>LOGO-SGDF.png" alt="logo-sgdf"></a>
		<ul id="menu1">
			<li id="liste"><a href="#">Présentation</a></li>
			<li id="liste"><a href="galerie">Galerie</a></li>
			<li id="liste"><a href="evenements">Events</a></li>
			<li id="liste"><a href="#">Contact</a></li>
		</ul>
	</div>
</header>

<body>