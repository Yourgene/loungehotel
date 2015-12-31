<?php
	
	//recupere les services coches + leur prix
	function get_services_selectionnes($liste_services,$_POST1){

		$services_selectionnes = array();

		foreach ($liste_services as $service){
			if(isset($_POST1[$service['nom_service']])){
				$services_selectionnes[$service['nom_service']] = $_POST1[$service['nom_service'] . '_prix'];
			}
		}

		return $services_selectionnes;
	}



	//Recupere le nombre de chambres et de places
	function get_nombre_places($_POST1) {

		$places_hotel = array();
	
		for ($i=1;$i<11;$i++){
			$places_hotel['lit_' . $i] = $_POST1['lit_' . $i];
		}

		return $places_hotel;
	}