<?php
	include 'lib/PDO.php';


	if(isset($_GET['action'])){
		if ($_GET['action']=='suppression'){

			include 'modele/affichage_reservation/suppression_reservation.php';
			suppression_reservation($_GET['id']);
		}
		else if ($_GET['action']=='facturation'){

			include 'modele/affichage_reservation/facturation_reservation.php';
			facturation_reservation($_GET['id']);
		}
	} 

	else {

		include 'modele/affichage_reservation/affichage_reservation.php';
		include 'modele/affichage_reservation/recuperation_hebergement.php';

		$infos_hebergement = recuperation_hebergement($_SESSION['id']);

		$liste_reservations = affichage_reservation($infos_hebergement['id_hebergement']);

		include 'vue/affichage_reservation/affichage_reservation.php';
	
	}
	