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


	public static function getId($pseudo_user){
		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT id FROM membres WHERE nom_utilisateur = "' . $pseudo_user . '"');
		return ($req[0]['id']);
	}

	

	public static function connexion($username,$password) {

		$pdo = PdoSio::getPdoSio();
		$req = $pdo->selectRequest('SELECT id_proprietaire FROM proprietaire WHERE email_proprietaire = "' . $username . '" and mot_de_passe = "' . password_hash($password,PASSWORD_BCRYPT); . '"');

		if($req){
			return $req[0]['id'];
		} else{
			return 'false';
		}
	}


}