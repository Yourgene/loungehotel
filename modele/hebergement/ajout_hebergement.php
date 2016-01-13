<?php

	//ajoute un hebergement a la bdd ainsi que son rpoprietaire
	function ajout_hebergement($services_selectionnes,$places_hotel,$nom,$adresse,$prix,$categorie,$etoiles,$resident,$nom_proprietaire,$prenom_proprietaire,$email_proprietaire,$numero_telephone){


		//creation du compte du proprietaire
		$mdp_nohash = random_password(10);
		$mdp_proprietaire = md5($mdp_nohash);
		
		$valeurs = array($nom_proprietaire,$prenom_proprietaire,$email_proprietaire,$mdp_proprietaire);
		$colonnes = array('nom_proprietaire','prenom_proprietaire','email_proprietaire','mdp_proprietaire');

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->InsertRequest('proprietaire',$colonnes,$valeurs);
		$req = $pdo->selectRequest('SELECT id_proprietaire FROM proprietaire WHERE email_proprietaire = "' . $email_proprietaire . '"');
		$id_proprietaire = $req[0]['id_proprietaire'];


		
		//ajout des differentes caracteristiques dans la table hebergement
		$valeurs = array($id_proprietaire,$nom,$categorie,$adresse,$prix,$etoiles,$resident,$numero_telephone,$places_hotel['lit_1'],$places_hotel['lit_2'], $places_hotel['lit_3'], $places_hotel['lit_4'], $places_hotel['lit_5'], $places_hotel['lit_6'], $places_hotel['lit_7'], $places_hotel['lit_8'], $places_hotel['lit_9'], $places_hotel['lit_10']);
		$colonnes = array('id_proprietaire','nom_hebergement','categorie_hebergement','adresse_hebergement','prix_hebergement','etoiles_hebergement','resident_hebergement','telephone_hebergement','lit_1', 'lit_2', 'lit_3', 'lit_4', 'lit_5', 'lit_6', 'lit_7', 'lit_8', 'lit_9', 'lit_10');

		
		$req = $pdo->InsertRequest('hebergement',$colonnes,$valeurs);


		//recuperation de l'ID de l'hebergement
		$req = $pdo->selectRequest('SELECT id_hebergement FROM hebergement WHERE nom_hebergement = "' . $nom . '" AND adresse_hebergement = "' . $adresse . '"');
		$id = $req[0]['id_hebergement'];



		//ajout des services dans la table possede_services
		$colonnes = array('id_hebergement','nom_service','prix_service');


		foreach ($services_selectionnes as $key => $value) {

				$valeurs = array($id,$key,$value);
				
				$req = $pdo->InsertRequest('possede_service',$colonnes,$valeurs);

		}


		echo '<p>identifiants de connexion :</br>pseudo :' . $id_proprietaire . '</br>mdp : ' . $mdp_nohash . '</p>'

	}