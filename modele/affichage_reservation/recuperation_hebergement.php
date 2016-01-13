<?php
	
	function recuperation_hebergement($id){

		

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT id_hebergement,nom_hebergement from hebergement where id_proprietaire =' . $id . '');
		return($req[0]);


	}