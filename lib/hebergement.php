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

}