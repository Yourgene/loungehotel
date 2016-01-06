<?php
	
	function afficher_hebergement_dispo($data){

		$reponse = array();

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

		//On va maintenant récupérer les services associées à chaque etablissement
		$liste_services = array();

		foreach ($req as $key => $value) {
			$services = Hebergement::getServices($value['id_hebergement']);
			$liste_services[$key] = $services;
		}

		$reponse[0] = $req;
		$reponse[1] = $liste_services;
		return ($reponse);


	}