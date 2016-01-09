<?php
	
	//Permet a l'user de s'authentifier et d'etre redirigé sur la bonne bonne page
	function authentification($pseudo,$mdp){

		$connexion = User::connexion($pseudo,$mdp);

		if ($connexion !== 'false'){

			$_SESSION['id'] = $connexion;

			header('Location: /loungehotel/accueil ');
			exit();	   
		}
		else{
			header('Location: /loungehotel/connexion ');      
  			exit();   
		}
	}