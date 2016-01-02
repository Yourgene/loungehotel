<div>



	<h1>Ajout d'un nouvel établissement</h1>
	<form method="post" action="hebergement">

		<h2>Creation du proprietaire :</h2>

		<label for="nom_proprietaire">Nom Proprietaire : </label>
		<input type="text" name="nom_proprietaire"><br/>

		<label for="prenom_proprietaire">Prenom Proprietaire : </label>
		<input type="text" name="prenom_proprietaire"><br/>

		<label for="email_proprietaire">Mail Proprietaire : </label>
		<input type="text" name="email_proprietaire"><br/><br/>


		<h2>Creation de l'hebergement :</h2>
		<label for="nom">Nom : </label>
		<input type="text" name="nom"><br/>
		
		<label for="adresse">Adresse : </label>
		<input type="text" name="adresse"><br/>

		<label for="prix">Prix/nuit : </label>
		<input type="text" name="prix"><br/>

		<label for="etoiles">Nombre d'étoiles : </label>
		<input type="text" name="etoiles"><br/>

		<label for="resident">Destiné aux : </label>
		<select name="resident" id="resident">
		   <option value="arbitre">Arbitres</option>
		   <option value="equipe">Equipe Sportive</option>
		</select><br/>

		<label for="categorie">Catégorie : </label>
		<select name="categorie" id="categorie">
		   <option value="Hotel">hotel</option>
		   <option value="Auberge de jeunesse">Auberge de jeunesse</option>
		</select><br/><br/>

		<label for="numero_telephone">Numéro Telephone : </label>
		<input type="text" name="numero_telephone"><br/>


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

		<h2>Ajouter un service inexistant : </h2>

		<label for="nom_service">Nom : </label>
		<input type="text" name="nom_service"><br/>

		
		<input type="submit" value="Creer ce service" />
	</form>