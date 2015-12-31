<?php
	


	include 'lib/PDO.php';

	//permet l'affichage des services deja enregistres dans la bdd
	include 'modele/hebergement/affichage_services.php';
	$liste_services = affichage_services();




	//permet l'ajout d'un nouveau service dans la bdd
	if (!empty($_POST['nom_service'])){
		
		include 'modele/hebergement/ajout_service.php';
		ajout_service($_POST['nom_service']);
	}




	//permet l'ajout d'un nouvel etablissement
	else if (!empty($_POST['nom'])){

		if (!empty($_POST['adresse']) && !empty($_POST['prix'])){

			//traitement prealable des données
			include 'modele/hebergement/traitements.php';
			$services_selectionnes = get_services_selectionnes($liste_services,$_POST);
			$places_hotel = get_nombre_places($_POST);


			include 'modele/hebergement/ajout_hebergement.php';
			ajout_hebergement($services_selectionnes,$places_hotel,$_POST['nom'],$_POST['adresse'],$_POST['prix'],$_POST['categorie']);
		}

	}

	//affichage de la vue (formulaires)
	include 'vue/hebergement/hebergement.php';