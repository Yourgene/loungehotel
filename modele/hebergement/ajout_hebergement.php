<?php

	//ajoute un hebergement a la bdd
	function ajout_service($services_selectionnes,$places_hotel,$nom,$adresse,$prix,$categorie){
		
		$valeurs = array($nom,$description);
		$colonnes = array('nom_service','description_service');

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->InsertRequest('service',$colonnes,$valeurs);
	}