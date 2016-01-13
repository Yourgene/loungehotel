<?php
 
 	function facturation_reservation($id){

 		$pdo = PdoSio::getPdoSio();
 		$pdo->actionRequest('UPDATE reservation SET  paye = "oui" where id_reservation =' . $id . '');
		
		header('Location: /loungehotel/affichage_reservation ');      
  		exit();   

 	}