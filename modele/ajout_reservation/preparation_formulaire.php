<?php
	
	function preparation_formulaire($nb_places,$chambre_commune,$id,$data){

		$pdo = PdoSio::getPdoSio();

		//recuperation infos hebergement
		$req = $pdo->selectRequest('SELECT * FROM hebergement WHERE id_proprietaire = "' . $id . '"');
		$infos_hebergement = $req[0];
		
		//recuperation du nombre de jours que va passe le logé
		$date_debut = explode('/', $data['from']); 
		$date_fin  = explode('/', $data['to']); 

		$date_debut_formatee = mktime(0, 0, 0, intval($date_debut[0]), intval($date_debut[1]), intval($date_debut[2]));
		$date_fin_formatee = mktime(0, 0, 0, intval($date_fin[0]), intval($date_fin[1]), intval($date_fin[2]));

		echo $date_fin_formatee . ' _ ' . $date_debut_formatee;

		$duree = ($date_fin_formatee - $date_debut_formatee)/86400;	

		echo $duree;	

		//recuperation des chambres correspondantes + calcul du prix
		if ($chambre_commune == NULL){
			$chambres = array('lit_1' => $infos_hebergement['lit_1']);
			$prix = $infos_hebergement['prix_hebergement']*$nb_places;
		}
		else {
			$chambres = array('lit_' . $nb_places => $infos_hebergement['lit_' . $nb_places]);
			$prix = $infos_hebergement['prix_hebergement'];
		}

		
		//Recuperation des services selectionnes et MaJ du prix

		$liste_services = Hebergement::getServicesTab(Hebergement::getId($id));
		$services_selectionnes = array();

		foreach ($liste_services as $service){
			if(isset($data[$service['nom_service']])){
				$services_selectionnes[$service['nom_service']] = $service['prix_service'];
				$prix += $service['prix_service']*$nb_places;
			}
		}



	}