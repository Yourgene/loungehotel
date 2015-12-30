<?php
	
	//ajoute un service a la bdd. Deux services ne peuvent avoir le meme nom
	function ajout_service($nom){

		$valeurs = array($nom);
		$colonnes = array('nom_service');

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->InsertRequest('service',$colonnes,$valeurs);
	}
	