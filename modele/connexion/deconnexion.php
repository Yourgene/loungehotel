<?php
	
	function deconnexion(){

		session_destroy();
		header('Location: /loungehotel/accueil ');      
  		exit();   
	}