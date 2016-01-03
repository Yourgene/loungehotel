<?php
	
	include 'lib/PDO.php';
	
	if (isset($_GET['action']) && $_GET['action']=='visualiser'){

		if ($_POST['nb_places']){

			//permet de recuperer les hebergements correspondants aux criteres de recherche du client
			include 'modele/reservation/afficher_hebergement_dispo.php';
			$liste_hebergements = afficher_hebergement_dispo($_POST);

			//affichage de ces hebergements
			include 'vue/reservation/afficher_hebergement_dispo.php';
		}

		


	} else {

		include 'vue/reservation/reservation.php';
	}
	

	