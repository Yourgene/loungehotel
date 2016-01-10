<?php
	
	function preparation_formulaire($nb_places,$chambre_commune,$id,$data){

		$pdo = PdoSio::getPdoSio();

		//recuperation infos hebergement
		$req = $pdo->selectRequest('SELECT * FROM hebergement WHERE id_proprietaire = "' . $id . '"');
		$infos_hebergement = $req[0];
		

		//recuperation des chambres correspondantes
		if ($chambre_commune == NULL){
			$chambres = array('lit_1' => $infos_hebergement['lit_1']);
			$prix = $infos_hebergement['prix_hebergement']*$nb_places;
		}
		else {
			$chambres = array('lit_' . $nb_places => $infos_hebergement['lit_' . $nb_places]);
			$prix = $infos_hebergement['prix_hebergement'];
		}

		
		
		


	}