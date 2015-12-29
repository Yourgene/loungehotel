<?php class User {
	
	private $_id;
	private $_username;
	private $_password;
	private $_mail;



	public static function getPseudo($id_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT nom_utilisateur FROM membres WHERE id = "' . $id_user . '"');
		return ($req[0]['nom_utilisateur']);
	}

	public static function getMail($id_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT adresse_email FROM membres WHERE id = "' . $id_user . '"');
		return ($req[0]['adresse_email']);
	}

	public static function getDateInscription($id_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT date_inscription FROM membres WHERE id = "' . $id_user . '"');
		return ($req[0]['date_inscription']);
	}

	public static function getStatut($id_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT statut FROM membres WHERE id = "' . $id_user . '"');
		return ($req[0]['statut']);
	}

	public static function getId($pseudo_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT id FROM membres WHERE nom_utilisateur = "' . $pseudo_user . '"');
		return ($req[0]['id']);
	}

	public static function getSuperieur($id_user){
		$pdo = PdoSio::getPdoSio();

		$req = $pdo->selectRequest('SELECT id_superieur FROM membres WHERE id = "' . $id_user . '"');
		$req2 = $pdo->selectRequest('SELECT nom_utilisateur FROM membres WHERE id = "' . $req[0]['id_superieur'] . '"');

		return($req2);	
	}

	public static function getCollegues($id_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT id_superieur FROM membres WHERE id = "' . $id_user . '"');

		$req2 = $pdo->selectRequest('SELECT nom_utilisateur FROM membres WHERE id_superieur = "' . $req[0]['id_superieur'] . '" AND id != "' . $id_user . '"');

		return($req2);
	}

	public static function getSubordonnes($id_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT nom_utilisateur FROM membres WHERE id_superieur = "' . $id_user . '"');

		return($req);
	}


	public static function getEvenementsInscrit($pseudo_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT nom_event,date_event FROM evenements, participation WHERE id_participant = "' . $pseudo_user . '" AND evenements.id_event=participation.id_event');
		return ($req);
	}




	public static function newUser($username,$password,$mail) {

		$date = date('Y-m-d');
		$valeurs = array($username, $password, $mail, $date);
		$colonnes = array('nom_utilisateur','mot_de_passe','adresse_email','date_inscription');

		$pdo = PdoSio::getPdoSio();
		$pdo->insertRequest('membres',$colonnes,$valeurs);
	}

	public static function participerA($id_user,$id_event,$decision){

		$date = date('Y-m-d');
		$valeurs = array($id_event,$id_user,$decision,$date);
		$colonnes = array('id_event', 'id_participant', 'decision', 'date_participation');

		$pdo = PdoSio::getPdoSio();
		$pdo->insertRequest('participation', $colonnes, $valeurs);
	}

	public static function addCovoiturage($id_event,$id_user,$username,$places,$fumeur,$lieu_depart,$heure_depart){

		$valeurs = array($id_event,$id_user,$username,$places, $lieu_depart,$fumeur,$heure_depart);
		$colonnes = array('id_event', 'id_chauffeur', 'nom_chauffeur','places', 'lieu_depart','fumeur','heure_depart');

		$pdo = PdoSio::getPdoSio();
		$pdo->insertRequest('covoiturage', $colonnes, $valeurs);
	}

	public static function reserverSiegeCovoiturage($id_covoiturage,$id_passager,$nom_passager){

		$valeurs = array($id_covoiturage,$id_passager,$nom_passager);
		$colonnes = array('id_covoiturage', 'id_passager', 'nom_passager');

		$pdo = PdoSio::getPdoSio();
		$pdo->insertRequest('participation_covoiturage', $colonnes, $valeurs);
		$pdo->actionRequest("UPDATE covoiturage SET places=places-1 WHERE id_covoiturage=$id_covoiturage");
	}

	public static function connexion($username,$password) {

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT id, nom_utilisateur, mot_de_passe FROM membres WHERE nom_utilisateur = "' . $username . '" and mot_de_passe = "' . $password . '"');


		if($req){
			return $req[0]['id'];
		} else{
			return 'false';
		}
	}


}