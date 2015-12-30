<div>
	Ajout d'un nouvel établissement
	<form method="post" action="hebergement">

	 	<label for="nom">Nom : </label>
	 	<input type="text" name="nom"><br/>
	 	
	 	<label for="adresse">Adresse : </label>
	 	<input type="text" name="adresse"><br/>

	 	<label for="prix">Prix/nuit : </label>
	 	<input type="text" name="prix"><br/>

		<label for="categorie">Catégorie : </label>
	   	<select name="categorie" id="categorie">
	       <option value="Hotel">hotel</option>
	       <option value="Auberge de jeunesse">Auberge de jeunesse</option>
	   	</select><br/><br/>

	   	Nombre de places : <br/>

	   	<label for="lit_1">Chambres à 1 lit : </label>
	 	<input type="text" name="lit_1"><br/>

	 	<label for="lit_2">Chambres à 2 lit : </label>
	 	<input type="text" name="lit_2"><br/>

	 	<label for="lit_3">Chambres à 3 lit : </label>
	 	<input type="text" name="lit_3"><br/>

	 	<label for="lit_4">Chambres à 4 lit : </label>
	 	<input type="text" name="lit_4"><br/>

	 	<label for="lit_5">Chambres à 5 lit : </label>
	 	<input type="text" name="lit_5"><br/>

	 	<label for="lit_6">Chambres à 6 lit : </label>
	 	<input type="text" name="lit_6"><br/>

	 	<label for="lit_7">Chambres à 7 lit : </label>
	 	<input type="text" name="lit_7"><br/>

	 	<label for="lit_8">Chambres à 8 lit : </label>
	 	<input type="text" name="lit_8"><br/>

	 	<label for="lit_9">Chambres à 9 lit : </label>
	 	<input type="text" name="lit_9"><br/>

	 	<label for="lit_10">Chambres à 10 lit : </label>
	 	<input type="text" name="lit_10"><br/><br/>

	 	Services proposés : <br/>
	 	<!-- affichage de tous les services disponibles grace a une requete sql -->
	 	<?php 
		foreach($liste_services as $service)
		{
		?>
	 	<input type="checkbox" name="<?php echo($service['nom_service']); ?>" value="<?php echo($service['nom_service']); ?>"> <?php echo($service['nom_service']); ?>
	 	- prix : <input type="text" name="<?php echo($service['nom_service']); ?>_prix"><br/>
	 	<?php } ?>

		<br/>
		<br/>
		<input type="submit" value="Ajouter cet établissement" />
	</form>


		<!-- Formulaire ajout nouveau service -->

	<form method="post" action="hebergement">
	 	<input type="HIDDEN" name="action" value="participer_evenement"><br/>

	 	Ajouter un service inexistant : <br/>

	 	<label for="nom_service">Nom : </label>
	 	<input type="text" name="nom_service"><br/>

		
		<input type="submit" value="Ajouter ce service" />
	</form>