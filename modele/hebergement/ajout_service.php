<?php
	
	//ajoute un service a la bdd. Deux services ne peuvent avoir le meme nom
	function ajout_service($description){

		$nom = str_replace(" ", "", $description);

		$valeurs = array($nom,$description);
		$colonnes = array('nom_service','description_service');

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->InsertRequest('service',$colonnes,$valeurs);
	}
	