<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "utf-8" />
		<title>Gestion Hotel</title>
        <base href="http://localhost/loungehotel/">
	</head>

<header>
<!--Bandeau de navigation -->
	<div>
		<ul>

			<?php if (isset($_SESSION['id']) && $_SESSION['id'] == '1'){ ?>
			<li><a href="hebergement">Nouvel Hebergement</a></li>
			<?php } ?>

			<?php if (isset($_SESSION['id']) /*&& $_SESSION['id'] != '1'*/){ ?>
			<li><a href="ajout_reservation">Nouvelle réservation</a></li>
			<?php } else {?>
			<li><a href="reservation">Effectuez une réservation</a></li>
			<?php } ?>
			


			<?php if (!isset($_SESSION['id'])){ ?>
			<li><a href="connexion">Espace Organisateurs</a></li>
			<?php } else { ?>
			<li><a href="connexion/off">Deconnexion</a></li>
			<?php } ?>
			
		</ul>
	</div>
</header>

<body>