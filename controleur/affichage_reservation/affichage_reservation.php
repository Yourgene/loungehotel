<?php
	include 'lib/PDO.php';

	include 'modele/affichage_reservation/affichage_reservation.php';
	include 'modele/affichage_reservation/recuperation_hebergement.php';

	$infos_hebergement = recuperation_hebergement($_SESSION['id']);
	
	affichage_reservation($infos_hebergement['id_hebergement']);

	include 'vue/affichage_reservation/affichage_reservation.php';
	