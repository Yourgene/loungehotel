<?php

	//ajoute un hebergement a la bdd
	function ajout_service($nom){

		$valeurs = array($nom);
		$colonnes = array('nom_service');

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->InsertRequest('service',$colonnes,$valeurs);
	}