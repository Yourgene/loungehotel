<?php
	
	function preparation_formulaire($nb_places,$chambre_commune,$id,$data){

		$pdo = PdoSio::getPdoSio();

		//recuperation infos hebergement
		$req = $pdo->selectRequest('SELECT * FROM hebergement WHERE id_proprietaire = "' . $id . '"');
		$infos_hebergement = $req[0];

		

		//recuperation + formatage du nombre de jours que va passe le logé
		$date_debut = explode('/', $data['from']); 
		$date_fin  = explode('/', $data['to']); 

		$date_debut_bd = new DateTime($data['from']);
		$date_fin_bd = new DateTime($data['to']);
		print_r($date_fin_bd);

		$date_debut_formatee = mktime(0, 0, 0, intval($date_debut[0]), intval($date_debut[1]), intval($date_debut[2]));
		$date_fin_formatee = mktime(0, 0, 0, intval($date_fin[0]), intval($date_fin[1]), intval($date_fin[2]));

		$diff = ($date_fin_formatee - $date_debut_formatee);	
		$retour = array();
	    $tmp = $diff;
	    $retour['second'] = $tmp % 60;
	    $tmp = floor( ($tmp - $retour['second']) /60 );
	    $retour['minute'] = $tmp % 60;
	    $tmp = floor( ($tmp - $retour['minute'])/60 );
	    $retour['hour'] = $tmp % 24;
	    $tmp = floor( ($tmp - $retour['hour'])  /24 );
	    $retour['day'] = $tmp;

	    $duree = $retour['day'];


	

		//recuperation des chambres correspondantes + calcul du prix
		if ($chambre_commune == NULL){
			$chambres = array('lit_1' => $infos_hebergement['lit_1']);
			$prix = $infos_hebergement['prix_hebergement']*$nb_places*$duree;
		}
		else {
			$chambres = array('lit_' . $nb_places => $infos_hebergement['lit_' . $nb_places]);
			$prix = $infos_hebergement['prix_hebergement']*$duree;
		}


		
		//Recuperation des services selectionnes et MaJ du prix

		$liste_services = Hebergement::getServicesTab(Hebergement::getId($id));
		$services_selectionnes = array();

		foreach ($liste_services as $service){
			if(isset($data[$service['nom_service']])){
				$services_selectionnes[$service['nom_service']] = $service['prix_service'];
				$prix += $service['prix_service']*$nb_places*$duree;
			}
		}

		echo $prix;



	}