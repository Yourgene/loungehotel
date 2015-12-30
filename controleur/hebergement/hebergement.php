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

				$services_selectionnes = array();
				$places_hotel = array();

				foreach ($liste_services as $service){
					if(isset($_POST[$service['nom_service']])){
						$services_selectionnes = $_POST[$service . '_prix'];
					}
				}

				

				include 'modele/hebergement/ajout_hebergement.php';
				ajout_hebergement($services_selectionnes,$_POST['nom'],$_POST['adresse'],$_POST['prix'],$_POST['categorie'],$_POST['lit_1'],$_POST['lit_2'],$_POST['lit_3'],$_POST['lit_4']);
		}

	}

	//affichage de la vue (formulaires)
	include 'vue/hebergement/hebergement.php';