<?php


	//gestion de session
	include 'lib/app.php';
	App::getSession();

	// Début de la tamporisation de sortie
	ob_start();


	//"routage" du site web. EN fonction du parametre section, l'user est envoyé sur de differentes pages

	//redirection vers index
	if (!isset($_GET['section']) OR $_GET['section'] == 'index') {
    	include('controleur/index/index.php');
	}
	//ajout d'un nouvel hebergement
	else if ($_GET['section'] == 'hebergement'){
		include('controleur/hebergement/hebergement.php');
	}
	//ajout d'une reservation
	else if ($_GET['section'] == 'reservation'){
		include('controleur/reservation/reservation.php');
	}
	//permet aux organisateurs et proprietaires d'hotel de se loguer
	else if ($_GET['section'] == 'connexion'){
		include('controleur/connexion/connexion.php');
	}

	//fin tamporisation
	$contenu = ob_get_clean();


	include 'vue/metaheader.php';

	echo $contenu;

	// Fin du code HTML
