<?php
	
	//cree la reservation dans la bdd
	function creation_reservation($liste_chambres,$donnees,$nb_places,$chambre_commune){

		$pdo = PdoSio::getPdoSio();

		$valeurs = array($donnees[0]['id_hebergement'],$donnees[1],$donnees[2],$donnees[5],'non');
		$colonnes = array('id_hebergement','date_debut','date_fin','prix_reservation','paye');
		$req = $pdo->InsertRequest('reservation',$colonnes,$valeurs);

		$req = $pdo->selectRequest('SELECT id_reservation FROM reservation ORDER BY id_reservation desc LIMIT 1');
		$id_reservation = $req[0]['id_reservation'];


		if($chambre_commune != NULL){

		}

		else {
			foreach ($liste_chambres[0]) {
				# code...
			}
		}
		


		


	}