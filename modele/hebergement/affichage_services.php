<?php
	function affichage_services(){

	$pdo = PdoSio::getPdoSio();
	$req = $pdo->selectRequest('SELECT nom_service,description_service FROM service');
	return ($req);

	}