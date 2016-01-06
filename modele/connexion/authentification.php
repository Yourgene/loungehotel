<?php
	
	//Permet a l'user de s'authentifier et d'etre redirigé sur la bonne bonne page
	function authentification($pseudo,$mdp){

		$connexion = User::connexion($pseudo,$mdp);

		if ($connexion == 'false'){

			header('Location: accueil');      
  			exit();   
		}
		else{
			header('Location: connexion');      
  			exit();   
		}
	}