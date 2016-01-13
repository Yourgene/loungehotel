<?php
	
	//cree la reservation dans la bdd
	function creation_reservation($liste_chambres,$donnees,$nb_places,$chambre_commune){

		$pdo = PdoSio::getPdoSio();

		$date_debut = explode("/",$donnees[1]);
		$date_debut_sql = $date_debut[2] . '-' . $date_debut[0] . '-' . $date_debut[1];
		$date_fin = explode("/",$donnees[2]);
		$date_fin_sql = $date_fin[2] . '-' . $date_fin[0] . '-' . $date_fin[1];



		if($chambre_commune != NULL){
			$valeurs = array($donnees[0]['id_hebergement'],$date_debut_sql,$date_fin_sql,$donnees[5],'non',$nb_places,$nb_places);
		} else {
			$valeurs = array($donnees[0]['id_hebergement'],$date_debut_sql,$date_fin_sql,$donnees[5],'non',$nb_places,'1');
		}

		$colonnes = array('id_hebergement','date_debut','date_fin','prix_reservation','paye','nb_personnes','taille_chambre');
		$req = $pdo->InsertRequest('reservation',$colonnes,$valeurs);

		$req = $pdo->selectRequest('SELECT id_reservation FROM reservation ORDER BY id_reservation desc LIMIT 1');
		$id_reservation = $req[0]['id_reservation'];


		if($chambre_commune != NULL){

			$valeurs = array($id_reservation, $liste_chambres['numero_chambre_0'],$liste_chambres['nom_1'],$liste_chambres['prenom_1'],$liste_chambres['mail_1']);
			$colonnes = array('id_reservation','id_chambre','nom_loge','prenom_loge','email_loge');
			$req = $pdo->InsertRequest('reservation_chambre',$colonnes,$valeurs);
			$pdo->actionRequest('UPDATE hebergement SET lit_' . $nb_places . ' = lit_' . $nb_places .'-' . $nb_places . ' WHERE id_hebergement=' . $donnees[0]['id_hebergement'] . '');
		}

		else {
			for($i=1;$i<=$nb_places;$i++){

				$valeurs = array($id_reservation, $liste_chambres['numero_chambre_' . $i],$liste_chambres['nom_' . $i],$liste_chambres['prenom_' . $i],$liste_chambres['mail_' . $i]);
				$colonnes = array('id_reservation','id_chambre','nom_loge','prenom_loge','email_loge');
				$req = $pdo->InsertRequest('reservation_chambre',$colonnes,$valeurs);
			}
			$pdo->actionRequest('UPDATE hebergement SET lit_1 = lit_1-' . $nb_places . ' WHERE id_hebergement=' . $donnees[0]['id_hebergement'] . '');
		}


		echo '<p>Numero réservation a transmettre au client : ' . $id_reservation . '</br><a href="accueil">Revenir a l\'accueil </a></p>';


		
		


		


	}