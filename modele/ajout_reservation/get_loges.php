<?php 
	
	//fonction permettant d'ordonner dans un tableau tous les loges
	function get_loges($data,$nb_places){

		$liste_loges = array();

		for ($i=1;$i<=$nb_places;$i++){

			$liste_loges[$i] = array($data['nom_' . $i], $data['prenom_' . $i], $data['email_' . $i]);
		}
		return($liste_loges);
	}