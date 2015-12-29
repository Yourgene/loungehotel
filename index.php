<?php
	
	//App::getSession();

	// Début de la tamporisation de sortie
	ob_start();


	//"routage" du site web. EN fonction du parametre section, l'user est envoyé sur de differentes pages

	//redirection vers index
	if (!isset($_GET['section']) OR $_GET['section'] == 'index') {
    	include('controleur/index/index.php');
	}
	//ajout d'un nouvel hebergement
	else if ($_GET['section'] == 'nouveau_hebergement'){
		include('controleur/nouveau_hebergement/nouveau_hebergement.php');
	}
	//ajout d'une reservation
	else if ($_GET['section'] == 'nouvelle_reservation'){
		include('controleur/nouvelle_reservation/nouvelle_reservation.php');
	}

	//fin tamporisation
	$contenu = ob_get_clean();


	include 'vue/metaheader.php';

	echo $contenu;

	// Fin du code HTML
	include 'vue/footer.php';