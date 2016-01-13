<?php
	
	function suppression_reservation($id){

		$pdo = PdoSio::getPdoSio();
		$pdo->actionRequest('DELETE from reservation_chambre where id_reservation = ' . $id . '');

		$req = $pdo->selectRequest('SELECT nb_personnes,taille_chambre,hebergement.id_hebergement from hebergement,reservation where id_reservation =' . $id . ' and hebergement.id_hebergement = reservation.id_hebergement');
		$infos_hebergement = $req[0];
		print_r($infos_hebergement);
		$pdo->actionRequest('DELETE from reservation where id_reservation = ' . $id . '');
		$pdo->actionRequest('UPDATE hebergement SET lit_' . $infos_hebergement['taille_chambre'] . ' = lit_' . $infos_hebergement['taille_chambre'] .'+' . $infos_hebergement['nb_personnes'] . ' WHERE id_hebergement=' . $infos_hebergement['id_hebergement'] . '');
		
		header('Location: /loungehotel/affichage_reservation ');      
  		exit();   


	}