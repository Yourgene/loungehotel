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
	   	<?php 
	   	for($i=1; $i<11;$i++){ ?>

	   		<label for="lit_<?php echo ($i) ?>">Chambres à <?php echo ($i) ?> lit : </label>
	 		<input type="text" value ="0" name="lit_<?php echo ($i) ?>"><br/>

	   	<?php } ?>
		<br/>

	 	Services proposés : <br/>
	 	<!-- affichage de tous les services disponibles grace a une requete sql -->
	 	<?php 
		foreach($liste_services as $service)
		{
		?>
	 	<input type="checkbox" name="<?php echo($service['nom_service']); ?>" value="<?php echo($service['nom_service']); ?>"> <?php echo($service['description_service']); ?>
	 	- prix : <input type="text" value ="0" name="<?php echo($service['nom_service']); ?>_prix"><br/>
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

		
		<input type="submit" value="Creer ce service" />
	</form>