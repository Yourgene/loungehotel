<?php
	
	function afficher_hebergement_dispo($data){

		//on construit la requete au fur et à mesure
		$requete = '';
		$requete .= 'SELECT * FROM hebergement WHERE resident_hebergement="' . $data['client'] . '" ';

		//selection du bon type d'etablissement
		if($data['residence'] != 'osef'){
			$requete .= 'AND categorie_hebergement ="' . $data['residence'] . '" ';
		}

		//selection de la bonne categorie de chambre
		if (!isset($data['chambre_commune']) ){
			$requete .= 'AND lit_1 > ' . intval($data['nb_places']) . ' ';
		} else {
			$requete .= 'AND lit_' . $data['nb_places'] . ' > 0 ';
		}

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest($requete);
		return ($req);


	}