<?php
	
	function affichage_reservation($id){

		

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT * from reservation where id_hebergement =' . $id . '');
		print_r($req);


	}