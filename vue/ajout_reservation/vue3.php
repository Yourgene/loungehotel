<div>

	<h1>Finalisation reservation </h1>

	<form method="post" action="ajout_reservation">

		<input type="hidden" name="action" value="vue3">

		<h2> Recapitulatif </h2>

		<p>
			
			Nom de l'hebergement : <?php echo $donnees[0]['nom_hebergement']; ?> </br>

			Categorie d'hebergement : <?php echo $donnees[0]['categorie_hebergement']; ?></br> 

			Services selectionnes : 
			<?php foreach ($donnees[6] as $key => $value) {
				echo $key . '(' . $value . '€)' . ' ';
			}?></br>

			Du : <?php echo $donnees[1] . ' au ' . $donnees[2] . ' (' . $donnees[3] . ' jour(s))' ; ?> </br>

			Chambres à <?php echo $donnees[4][0] ?> places disponibles : <?php echo $donnees[4][1] ?> </br>

			Prix du séjour : <?php echo($donnees[5]) ?> € 

		</p>

		<h2>Assignation des chambres</h2>

		<?php  for($i=1;$i<=$_SESSION['nb_places'];$i++) { ?>
		<h3>Logé n°<?php echo $i ?> :</h3>
		<p>	
			Nom : <?php echo $liste_loges[$i][0] ?> </br>
			<input type="hidden" name="nom_<?php echo $i ?>" value="<?php echo $liste_loges[$i][0] ?>">

			Prenom : <?php echo $liste_loges[$i][1] ?></br>
			<input type="hidden" name="prenom_<?php echo $i ?>" value="<?php echo $liste_loges[$i][1] ?>">

			E-mail : <?php echo $liste_loges[$i][2] ?></br>
			<input type="hidden" name="mail_<?php echo $i ?>" value="<?php echo $liste_loges[$i][2] ?>">
			<label for="numero_chambre_<?php echo $i ?>">Numéro chambre attribué : </label>
			<input type="text" name="numero_chambre_<?php echo $i ?>"><br/>
		</p>

		<?php } ?>





		<br/>

		<input type="submit" value="Effectuer la réservation" />
	
	</form>
</div>