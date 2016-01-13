<?php

	
	include 'lib/PDO.php';
	include 'lib/hebergement.php';

	//permet de passer a l'etape 2 du formulaire
	if (isset($_POST['action']) && $_POST['action'] == 'vue1'){

		$_SESSION['nb_places'] =intval( $_POST['nb_places']);
		if (isset($_POST['chambre_commune'])){
			$_SESSION['chambre_commune'] = $_POST['chambre_commune'];
		} else{
			$_SESSION['chambre_commune'] = NULL;
		}

		//recupere les services de l'hebergement
		$liste_services = Hebergement::getServicesTab(Hebergement::getId($_SESSION['id']));

		include 'vue/ajout_reservation/vue2.php';
	}

	//permet de passer a l'etape 3 du formulaire
	else if (isset($_POST['action']) && $_POST['action'] == 'vue2'){

		include 'modele/ajout_reservation/get_loges.php';
		$liste_loges = get_loges($_POST,$_SESSION['nb_places']);
		

		//preparation a l'affichage du dernier formulaire
		include 'modele/ajout_reservation/preparation_formulaire.php';
		$donnees = preparation_formulaire($_SESSION['nb_places'],$_SESSION['chambre_commune'],$_SESSION['id'],$_POST);

		include 'vue/ajout_reservation/vue3.php';

	}

	//page accueil
	else {
		include 'vue/ajout_reservation/vue1.php';
	}
	