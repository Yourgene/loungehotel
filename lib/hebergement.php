<?php class Hebergement {
	

	/*	
		renvoie les services d'un hebergement sous forme d'un string dont l'id est passé en parametre
	*/
	public static function getServices($id_hebergement){
		$chaine_services = '';
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT DISTINCT description_service FROM service, possede_service WHERE id_hebergement = ' . $id_hebergement . ' AND possede_service.nom_service = service.nom_service');

		foreach ($req as $service){
			
			$chaine_services .= $service['description_service'] . ' ';
		}
		return ($chaine_services);

	}

	/*	
		renvoie les services d'un hebergement sous forme d'un tableau
	*/
	public static function getServicesTab($id_hebergement){

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT description_service,prix_service, service.nom_service FROM service, possede_service WHERE id_hebergement = ' . $id_hebergement . ' AND possede_service.nom_service = service.nom_service AND prix_service >0');

		return ($req);

	}

	/*	
		renvoie l'id de l'hebergement grace a l'id du proprietaire
	*/
	public static function getId($id_proprietaire){

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT id_hebergement FROM hebergement WHERE id_proprietaire = ' . $id_proprietaire . '');

		return ($req[0]['id_hebergement']);

	}

}