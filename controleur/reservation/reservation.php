<?php
	
	include 'lib/PDO.php';
	include 'lib/hebergement.php';
	
	if (isset($_GET['action']) && $_GET['action']=='visualiser'){

		if ($_POST['nb_places']){

			//permet de recuperer les hebergements correspondants aux criteres de recherche du client
			include 'modele/reservation/afficher_hebergement_dispo.php';
			$reponse = afficher_hebergement_dispo($_POST);
			$liste_hebergements = $reponse[0];
			$liste_services = $reponse[1];

			//affichage de ces hebergements
			include 'vue/reservation/afficher_hebergement_dispo.php';
		}

	} else {

		include 'vue/reservation/reservation.php';
	}
	

	