<?php
	
	include 'lib/PDO.php';
	include 'lib/user.php';
	include 'lib/random_password.php';


	//permet de se deconnecter
	if (!empty($_GET['action']) && $_GET['action'] == 'off'){
		include 'modele/connexion/deconnexion.php';
		deconnexion();
	}

	//permet de s'authentifier sur le site web pour gerer les hebergements et reservation
	else if (!empty($_POST['action']) && ($_POST['action'] == 'login')){
		

		if(isset($_POST['pseudo']) && isset($_POST['password'])){

			include 'modele/connexion/authentification.php';
			authentification($_POST['pseudo'], $_POST['password']);


		}

		

	} else {

		include 'vue/connexion/connexion.php';
	}
	